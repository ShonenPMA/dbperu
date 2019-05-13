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
        $this->loadMigrationsFrom('/database/migrations');
        $this->publishes(['/database/migrations' => database_path('migrations'),
            ], 'shonen-migrations');
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
