<?php
/**
 * Created by PhpStorm.
 * User: destas
 * Date: 4/3/15
 * Time: 1:03 PM
 */
namespace Nfq\WeatherBundle;


interface WeatherServiceInterface
{
    public function getWeatherForLocation(Location $location);
}