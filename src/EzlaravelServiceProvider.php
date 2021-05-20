<?php

namespace Javck\Ezlaravel;

use Illuminate\Support\ServiceProvider;
use Javck\Ezlaravel\Ezlaravel;
use Javck\Ezlaravel\Http\Middleware\AdminOnly;
use Javck\Ezlaravel\Http\Middleware\CheckForMaintenanceMode;
use Javck\Ezlaravel\Http\Middleware\RoleCheck;
use Javck\Ezlaravel\Http\Middleware\VerifyEnabled;
use Javck\Ezlaravel\FormFields\ConstantFormField;
use Javck\Ezlaravel\FormFields\TagFormField;
use Javck\Ezlaravel\Http\Controllers\MyVoyagerBaseController;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use TCG\Voyager\Facades\Voyager;

class EzlaravelServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $publishablePath = dirname(__DIR__) .'/publishable';

        //榜定自定義表單輸入項
        Voyager::addFormField(ConstantFormField::class);
        Voyager::addFormField(TagFormField::class);

        //Route
        include dirname(__DIR__) . '/routes/web.php';
        include dirname(__DIR__) . '/routes/api.php';


        //Language
        $this->loadTranslationsFrom(dirname(__DIR__) . '/resources/lang', 'Ezlaravel');

        //View
        $this->loadViewsFrom(dirname(__DIR__) . '/resources/views', 'Ezlaravel');

        //Middleware
        $this->addMiddlewareAlias('javck.adminOnly', AdminOnly::class);
        $this->addMiddlewareAlias('javck.checkForMaintenanceMode', CheckForMaintenanceMode::class);
        $this->addMiddlewareAlias('javck.roleCheck', RoleCheck::class);
        $this->addMiddlewareAlias('javck.verifyEnabled', VerifyEnabled::class);

        //Files & Assets
        $this->publishes([
            $publishablePath . '/views' => resource_path('views'),
            $publishablePath . '/lang' => resource_path('lang'),
            $publishablePath . '/database' => database_path('/'),
            $publishablePath . '/Models' => app_path('/Models'),
            //$publishablePath . '/public' => public_path('/'),
            $publishablePath . '/Http/Controllers/Voyager' => app_path('Http/Controllers/Voyager'),
            $publishablePath . '/Http/Kernel.php' => app_path('Http/Kernel.php'),
            $publishablePath . '/Http/Controllers/SiteController.php' => app_path('Http/Controllers/SiteController.php'),
            $publishablePath . '/.env.sample' => base_path('.env.sample'),
            $publishablePath . '/config' => config_path('/'),
            $publishablePath . '/assets' => public_path('assets'),
            //$publishablePath . '/routes' => base_path('routes'),
            $publishablePath . '/storage' => storage_path('app/public/')
        ]);

         Voyager::addAction(\Javck\Ezlaravel\Actions\PayAction::class);
    }

    public function register()
    {
        $this->app->singleton('Ezlaravel', function () {
            return new Ezlaravel;
        });
        if ($this->app->runningInConsole()) {
            $this->registerConsoleCommands();
        }
    }

    public function provides()
    {
        return ['Ezlaravel'];
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

    /**
     * Register the commands accessible from the Console.
     */
    private function registerConsoleCommands()
    {
        $this->commands(Commands\InstallCommand::class);
        $this->commands(Commands\RepublishCommand::class);
    }
}
