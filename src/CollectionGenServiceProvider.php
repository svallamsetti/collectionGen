<?php

namespace Svallamsetti\CollectionGen;

use Illuminate\Support\ServiceProvider;

class CollectionGenServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'collectiongen');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'collectiongen');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('collectiongen.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/collectiongen'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/collectiongen'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/collectiongen'),
            ], 'lang');*/

            // Registering package commands.
             $this->commands([
                 CollectionGen::class
             ]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'collectiongen');

        // Register the main class to use with the facade
        $this->app->singleton('collectiongen', function () {
            return new CollectionGen;
        });
    }
}
