<?php

namespace FadliSaad\PHPTouchNGo;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class PHPTouchNGoServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('phpTouchngo', PHPTouchNGo::class);
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/touchngo.php' => config_path('touchngo.php'),
        ], 'touchngo-config');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->registerRoutes();
    }

    protected function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        });
    }

    protected function routeConfiguration()
    {
        return [
            'prefix' => config('phptouchngo.prefix'),
            'middleware' => config('phptouchngo.middleware'),
        ];
    }
}