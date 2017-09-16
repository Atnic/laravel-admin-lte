<?php

namespace Atnic\AdminLTE\Providers;

use Atnic\AdminLTE\Console\Commands\AdminLTEMakeCommand;
use Illuminate\Support\ServiceProvider;

/**
 * App Service Provider
 */
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/admin-lte.php' => config_path('admin-lte.php'),
        ], 'config');
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'admin-lte');
        $this->publishes([
            __DIR__.'/../../resources/views' => resource_path('views/vendor/admin-lte')
        ], 'views');
        if ($this->app->runningInConsole()) {
            $this->commands([
                AdminLTEMakeCommand::class,
            ]);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/admin-lte.php', 'admin-lte'
        );
    }
}
