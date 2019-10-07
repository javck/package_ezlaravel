<?php

namespace Javck\Easyweb2;

use Illuminate\Support\ServiceProvider;
use Javck\Easyweb2\Easyweb2;
use Javck\Easyweb2\Http\Middleware\AdminOnly;
use Javck\Easyweb2\Http\Middleware\CheckForMaintenanceMode;
use Javck\Easyweb2\Http\Middleware\ForceSSL;
use Javck\Easyweb2\Http\Middleware\RoleCheck;
use Javck\Easyweb2\Http\Middleware\VerifyEnabled;
use Javck\Easyweb2\FormFields\ConstantFormField;
use Javck\Easyweb2\FormFields\TagFormField;
use Javck\Easyweb2\Http\Controllers\MyVoyagerBaseController;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use TCG\Voyager\Facades\Voyager;

class Easyweb2ServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $publishablePath = dirname(__DIR__) .'/publishable';

        //榜定自定義表單輸入項
        Voyager::addFormField(ConstantFormField::class);
        Voyager::addFormField(TagFormField::class);

        //複寫VoyagerController
        $this->app->bind(VoyagerBaseController::class, MyVoyagerBaseController::class);

        //Route
        include dirname(__DIR__) . '/routes/easyweb2.php';

        //Language
        $this->loadTranslationsFrom(dirname(__DIR__) . '/resources/lang', 'easyweb2');

        //View
        $this->loadViewsFrom(dirname(__DIR__) . '/resources/views', 'easyweb2');

        //Middleware
        $this->addMiddlewareAlias('javck.adminOnly', AdminOnly::class);
        $this->addMiddlewareAlias('javck.checkForMaintenanceMode', CheckForMaintenanceMode::class);
        $this->addMiddlewareAlias('javck.forceSSL', ForceSSL::class);
        $this->addMiddlewareAlias('javck.roleCheck', RoleCheck::class);
        $this->addMiddlewareAlias('javck.verifyEnabled', VerifyEnabled::class);

        //Files & Assets
        $this->publishes([
            $publishablePath . '/views' => resource_path('views'),
            $publishablePath . '/lang' => resource_path('lang'),
            $publishablePath . '/database' => database_path('/'),
            $publishablePath . '/Exceptions' => app_path('/'),
            $publishablePath . '/Models/app' => app_path('/'),
            //$publishablePath . '/public' => public_path('/'),
            $publishablePath . '/BI.php' => app_path('Http/Model/BI.php'),
            $publishablePath . '/Http/Controllers/Auth/VoyagerAuthController.php' => app_path('Http/Controllers/Auth/VoyagerAuthController.php'),
            $publishablePath . '/Http/Controllers/SiteController.php' => app_path('Http/Controllers/SiteController.php'),
            $publishablePath . '/webpack.mix.js' => base_path('webpackCanvas.mix.js'),
            $publishablePath . '/config' => config_path('/'),
            $publishablePath . '/assets/js' => public_path('js'),
            $publishablePath . '/storage' => storage_path('app/public/')
        ]);

         Voyager::addAction(\Javck\Easyweb2\Actions\PayAction::class);
    }

    public function register()
    {
        $this->app->singleton('easyweb2', function () {
            return new Easyweb2;
        });
    }

    public function provides()
    {
        return ['easyweb2'];
    }

    # 添加中介層的别名方法
    protected function addMiddlewareAlias($name, $class)
    {
        $router = $this->app['router'];


        if (method_exists($router, 'aliasMiddleware')) {
            return $router->aliasMiddleware($name, $class);
        }


        return $router->middleware($name, $class);
    }
}