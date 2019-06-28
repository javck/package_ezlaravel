<?php

namespace Javck\Easyweb2;

use Illuminate\Support\ServiceProvider;
use Javck\Easyweb2\Easyweb2;
use Javck\Easyweb2\Middleware\AdminOnly;
use Javck\Easyweb2\Middleware\CheckForMaintenanceMode;
use Javck\Easyweb2\Middleware\ForceSSL;
use Javck\Easyweb2\Middleware\RoleCheck;
use Javck\Easyweb2\Middleware\VerifyEnabled;
use Javck\Easyweb2\FormFields\ConstantFormField;
use Javck\Easyweb2\FormFields\TagFormField;
use Javck\Easyweb2\Controllers\MyVoyagerBaseController;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use TCG\Voyager\Facades\Voyager;

class Easyweb2ServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //榜定自定義表單輸入項
        Voyager::addFormField(ConstantFormField::class);
        Voyager::addFormField(TagFormField::class);

        //複寫VoyagerController
        $this->app->bind(VoyagerBaseController::class, MyVoyagerBaseController::class);

        //Route
        include __DIR__ . '/routes.php';

        //Language
        $this->loadTranslationsFrom(__DIR__ . '/lang', 'easyweb2');

        //View
        $this->loadViewsFrom(__DIR__ . '/views', 'easyweb2');

        //Middleware
        $this->addMiddlewareAlias('javck.adminOnly', AdminOnly::class);
        $this->addMiddlewareAlias('javck.checkForMaintenanceMode', CheckForMaintenanceMode::class);
        $this->addMiddlewareAlias('javck.forceSSL', ForceSSL::class);
        $this->addMiddlewareAlias('javck.roleCheck', RoleCheck::class);
        $this->addMiddlewareAlias('javck.verifyEnabled', VerifyEnabled::class);

        //Files & Assets
        $this->publishes([
            __DIR__.'/views' => resource_path('views'),
            __DIR__.'/lang' => resource_path('lang'),
            __DIR__.'/database' => database_path('/'),
            __DIR__.'/Excel' => app_path('/'),
            __DIR__.'/Exceptions' => app_path('/'),
            __DIR__.'/Model/app' => app_path('/'),
            __DIR__.'/Policies' => app_path('/'),
            __DIR__.'/public' => public_path('/'),
            __DIR__.'/BI.php' => app_path('Http/Model/BI.php'),
            __DIR__.'/Controllers/Auth/VoyagerAuthController.php' => app_path('Http/Controllers/Auth/VoyagerAuthController.php'),
            __DIR__.'/webpack.mix.js' => base_path('webpack.mix.js'),
            __DIR__.'/config' => config_path('/'),
            __DIR__.'/storage' => storage_path('app/public/')
        ]);
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