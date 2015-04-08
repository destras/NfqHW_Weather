<?php
/**
 * Created by PhpStorm.
 * User: destas
 * Date: 4/8/15
 * Time: 1:04 PM
 */

namespace Nfq\WeatherBundle;

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

        if ($phpObj->{'query'}->{'results'} !== null) {
            $string = $phpObj->{'query'}->{'results'}
                ->{'channel'}->{'item'}->{'description'};
            $weather_now = preg_split('/Forecast/', $string);

            return $weather_now[0];
        } else {
            return 'Error, wrong coordinates';
        }
    }
}