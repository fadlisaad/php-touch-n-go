<?php

namespace PHPTouchNGo;

use Illuminate\Support\ServiceProvider;

/**
 * Class PHPTouchNGoServiceProvider
 */
class PHPTouchNGoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/touchngo.php' => config_path('touchngo.php'),
        ], 'touchngo-config');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('phpTouchngo', PHPTouchNGo::class);
    }
}