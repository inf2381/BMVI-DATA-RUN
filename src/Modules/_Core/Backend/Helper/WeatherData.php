<?php
/**
 * Created by PhpStorm.
 * User: Marc
 * Date: 03.12.16
 * Time: 01:05
 */

namespace BMVI\Datarun\Helper;


class WeatherData
{
    private $darksky;
    private $forecast;

    function __construct($apiKey, $lat, $long)
    {
        $this->darksky = new \DarkSky($apiKey);
        $this->forecast = $this->darksky->getForecast($lat, $long);
    }

    public function getWeatherDataInHour($hour) {
        return $this->forecast[hourly][data][$hour];
    }


    public static function getTemperature(){

    }


}