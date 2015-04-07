<?php
/**
 * Created by PhpStorm.
 * User: destas
 * Date: 4/3/15
 * Time: 1:09 PM
 */

namespace Nfq\WeatherBundle\Classes;


class YahooWeatherService implements WeatherServiceInterface
{
    public function getWeather ($location) {
        $BASE_URL = "http://query.yahooapis.com/v1/public/yql";
        $yql_query = 'select item.description from weather.forecast where woeid in (select woeid from geo.places(1) where text="'.$location.'" )AND u="c"';

        $yql_query_url = $BASE_URL . "?q=" . urlencode($yql_query) . "&format=json";
        $session = curl_init($yql_query_url);
        curl_setopt($session, CURLOPT_RETURNTRANSFER,true);

        $json = curl_exec($session);
        $phpObj =  json_decode($json);

        $string = $phpObj->{'query'}->{'results'}->{'channel'}->{'item'}->{'description'};
        $weather_now = preg_split('/Forecast/', $string);
        return($weather_now[0]);
    }
}