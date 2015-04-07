<?php
/**
 * Created by PhpStorm.
 * User: destas
 * Date: 4/3/15
 * Time: 1:03 PM
 */
namespace Nfq\WeatherBundle\Classes;


interface WeatherServiceInterface {

    public function getWeather($location);

}