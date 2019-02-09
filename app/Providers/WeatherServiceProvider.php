<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Library\Services\WeatherService;


class WeatherServiceProvider extends ServiceProvider
{
    protected $defer = false;


    public function register()
    {
        $this->app->bind('App\Services\WeatherService', function () {
            return new WeatherService();
        });
    }

    public function boot()
    {
        //
    }
}
