<?php

namespace Fatnaydev\Erpdashboard;

use Fatnaydev\Erpdashboard\Models\Erpdashboard;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Fatnaydev\Erpdashboard\Commands\InstallCommand;
use Fatnaydev\Erpdashboard\Observers\ErpdashboardObserver;

class ErpdashboardServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'erpdashboard');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'erpdashboard');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        Route::bind('erpdashboard', function ($id) {
            return Erpdashboard::withTrashed()->findOrFail($id);
        });
        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
        include __DIR__ . '/breadcrumbs.php';
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/erpdashboard.php', 'erpdashboard');
        // Register the service the package provides.
        $this->app->singleton('erpdashboard', function ($app) {
            return new Erpdashboard;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['erpdashboard'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/erpdashboard.php' => config_path('erpdashboard.php'),
        ], 'erpdashboard.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/erpdashboard'),
        ], 'erpdashboard.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/erpdashboard'),
        ], 'erpdashboard.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/erpdashboard'),
        ], 'erpdashboard.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
