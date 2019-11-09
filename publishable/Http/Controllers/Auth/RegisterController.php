<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Log;
use Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest',['except'=>['supplementRegistrationForm','supplementRegistration'] ]);
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        $url = '/register';
        return view('auth.register',compact('url'));
    }

    /**
     * 補充註冊資料(針對社群登入)
     */
    public function supplementRegistrationForm(Request $request)
    {
        $url = '/suppleregister';
        $provider_id = $request->all()['provider_id'];
        $user = User::where('provider_id',$provider_id)->first();
        return view('auth.register',compact('provider_id','user','url'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:45', 'unique:users'],
            'name' => ['required', 'string', 'max:45'],
            'email' => ['required', 'string', 'email', 'max:191', 'unique:users'],
            'address' => ['required', 'string','max:100'],
            'mobile' => ['required', 'string','max:20'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'g-recaptcha-response' => ['required','captcha'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if(setting('admin.useRegisterActivate') && setting('admin.useRegisterActivate') == true){
            $data['enabled'] = false;
        }
        return User::create([
            'username' => $data['username'],
            'name' => $data['name'],
            'email' => $data['email'],
            'address' => $data['address'],
            'mobile' => $data['mobile'],
            'password' => Hash::make($data['password']),
        ]);
    }

    //補齊註冊不完整的資料(一般是使用社群登入所致)
    protected function supplementRegistration(Request $request){
        $data = $request->all();
        $user = User::where('provider_id',$data['provider_id'])->first();
        if(isset($user)){
            $user->username = $data['username'];
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->address = $data['address'];
            $user->mobile = $data['mobile'];
            $user->password = Hash::make($data['password']);
            if(setting('admin.useRegisterActivate') && setting('admin.useRegisterActivate') == true){
                $user->enabled = false;
                $this->sendActivateLink($user);
            }
            $user->save();
        }else{
            Log::error('找不到註冊對象');
        }

        return redirect($this->redirectTo);
    }

    //寄發帳戶激活連結，停用中，改用Laravel內建功能
    // private function sendActivateLink(User $user)
    // {
    //     if($user != null){
    //         $serial = '';
    //         for ($i=0; $i<60; $i++){
    //             $serial = $serial . app('easyweb2')->rdmLetter();
    //         }
    //         $user->activate = $serial;
    //         $user->save();
    //         //寄出驗證Email
    //         Mail::send('emails.activate', ['user' => $user, 'activate' => $serial], function ($message) use ($user) {
    //             $message->to($user->email, $user->name)->subject(trans('messages.activate_title'));
    //         });
    //     }else{
    //         Log::error('寄發帳戶激活連結失敗');
    //     }
    // }

    //帳號激活，用於啟用帳號激活功能情況下。停用中，改用Laravel內建功能
    // protected function registerActivate(Request $request)
    // {
    //     $inputs = $request->only(['id','activate']);
    //     $user = User::find($inputs['id']);
    //     $data = array();
    //     if($user != null && $user->activate == $inputs['activate']){
    //         if($user->enabled == true){
    //             $data['icon'] = 'icon-exclamation-triangle';
    //             $data['title'] = __('messages.Whoops!');
    //             $data['content'] = __('messages.activate_done');
    //         }else{
    //             $user->enabled = true;
    //             $user->save();
    //             $data['icon'] = 'icon-checkmark';
    //             $data['title'] = __('messages.congretulation');
    //             $data['content'] = __('messages.activate_success');
    //         }
    //     }else{
    //         $data['icon'] = 'icon-exclamation-triangle';
    //         $data['title'] = __('messages.Whoops!');
    //         $data['content'] = __('messages.activate_fail');
    //     }
    //     return view('message',$data);
    // }
}
