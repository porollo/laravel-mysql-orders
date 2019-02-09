<?php
namespace App\Library\Services;

use Cmfcmf\OpenWeatherMap;

class WeatherService
{

    public function getBryanskTemperature()
    {

        $lang = 'ru';
        $units = 'metric';
        $owm = new OpenWeatherMap();

        $myApiKey = '8655099c62ea6275f32899d276ba58db';

        $owm->setApiKey($myApiKey);

        $weather = $owm->getWeather('Bryansk', $units, $lang)->temperature->now->getValue();

        return $weather;
    }

}