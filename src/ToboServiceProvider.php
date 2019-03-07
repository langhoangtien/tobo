<?php

namespace Langhoangtien\Tobo;

use Illuminate\Support\ServiceProvider;

class ToboServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__.'/views', 'tobo');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/htl/tobo'),
        ]);
    }
}
