<?php

namespace Shonen\DbPeru;

use Illuminate\Support\ServiceProvider;

class DbPeruServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        
         if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
            $this->publishes([__DIR__.'/../database/migrations' => database_path('migrations')]);
         }
        
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {


    }
}
