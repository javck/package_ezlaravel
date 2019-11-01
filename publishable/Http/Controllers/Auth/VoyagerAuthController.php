<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Http\Controllers\Controller;
use Voyager;
use Socialite;
use DB;

class VoyagerAuthController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';
    protected $loginPath = '/admin/login';
    protected $redirectAfterLogout = '/';
    protected $redirectToRegister = '/register';
    protected $redirectToBackend = '/admin';

    public function login()
    {
        if (app('VoyagerAuth')->user()) {
            return redirect()->route('voyager.dashboard');
        }

        return Voyager::view('voyager::login');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect($this->loginPath);
    }

    public function postLogin(Request $request)
    {
        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        $credentials = $this->credentials($request);

        if ($this->guard()->attempt($credentials, $request->has('remember'))) {
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }


    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * 從登入提供者處得到使用者資訊.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();

        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        if ($authUser->mobile == null || $authUser->email == null) {
            return redirect( $this->redirectToRegister );
        }else{
            if ( $authUser->hasPermission('browse_admin') ) {
                return redirect( $this->redirectToBackend );
            }else{
                return redirect( $this->redirectTo );
            }
        }
    }

    /**假如通過登入提供者驗證後發現使用者已經註冊過，就取得該使用者Record，否則就自動進行簡易註冊動作
     * If a user has registered before using social auth, return the user
     * else, create a new user object.
     * @param  $user Socialite user object
     * @param $provider Social auth provider
     * @return  User
     */
    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_id', $user->id)->first();
        if (!$authUser) {
            //可能已經用其他管道註冊過
            $authUser = User::where('email', $user->email)->first();
            $authUser->provider = $provider;
            $authUser->provider_id = $user->id;
            $authUser->save();
        }

        if ($authUser) {
            return $authUser;
        }else{
            $data = [
                'name'     => $user->name,
                'email'    => $user->email,
                'pic'      => $user->getAvatar(),
                'provider' => $provider,
                'provider_id' => $user->id,
            ];
            if ($provider == 'facebook') {
                $data['fb_id'] = $user->id;
            }
            return User::create($data);
        }

    /*
     * Preempts $redirectTo member variable (from RedirectsUsers trait)
     */
    public function redirectTo()
    {
        return config('voyager.user.redirect', route('voyager.dashboard'));
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'username';
    }

    protected function authenticated(Request $request, $user)
    {
        if($user->enabled == false){
            Auth::logout();
            return view('/404-page')->with('message','帳號停用中，請洽詢管理員!');
        }else{
            $roles = DB::table('user_roles')->where('user_id', $user->id)->get();
            if( $roles == null || count($roles) == 0 ){
                return redirect( $this->redirectTo );
            }
        }
    }
}
