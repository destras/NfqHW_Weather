<?php
/**
 * Created by PhpStorm.
 * User: destas
 * Date: 4/8/15
 * Time: 1:04 PM
 */

namespace Nfq\WeatherBundle\Classes;

/**
 * Class YahooWeatherParser
 *
 * @package Nfq\WeatherBundle\Classes
 */

class YahooWeatherParser
{
    public function parseWeather($json)
    {
        $phpObj = json_decode($json);
        $string = $phpObj->{'query'}->{'results'}
            ->{'channel'}->{'item'}->{'description'};
        $weather_now = preg_split('/Forecast/', $string);
        return $weather_now[0];
    }
}