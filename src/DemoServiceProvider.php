<?php

namespace erratbi\demo;

use Illuminate\Support\ServiceProvider;

class DemoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Demo::class, function () {
            return new Demo();
        });
        $this->app->alias(Demo::class, 'demo');
    }
}