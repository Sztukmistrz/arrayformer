<?php

namespace Sztukmistrz\Arrayformer;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__ . '/../config/arrayformer.php';

    public function boot()
    {

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'arrayformer');

        $this->publishes([
            self::CONFIG_PATH => config_path('arrayformer.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'arrayformer'
        );

        $this->app->bind('arrayformer', function () {
            return new Arrayformer();
        });
    }
}
