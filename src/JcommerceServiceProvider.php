<?php

namespace Jstore\Jcommerce;

use Illuminate\Support\ServiceProvider;

class JcommerceServiceProvider extends ServiceProvider 
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'jcommerce');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(
            __DIR__.'/config/jcommerce.php', 'jcommerce'
        );
        $this->publishes([
            __DIR__.'/config/jcommerce.php' => config_path('jcommerce.php'),
        ]);
    }
}