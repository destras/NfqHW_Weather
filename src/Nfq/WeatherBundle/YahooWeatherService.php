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
    public function __construct(YahooWeatherParser $parser, HttpClient $browser)
    {
        $this->parser = $parser;
        $this->browser = $browser;
    }

    public function getWeatherForLocation (Location $location)
    {
        $BASE_URL = "http://query.yahooapis.com/v1/public/yql";
        $yql_query = 'select item.description from weather.forecast
            where woeid in (select woeid from geo.placefinder
            where text="'.$location->getLongitude().','.$location->getLatitude().'"
            AND gflags = "R")AND u="c"';
        $yql_query_url = $BASE_URL . "?q=" . urlencode($yql_query) . "&format=json";

        $json = $this->browser->httpClient($yql_query_url);

        $weather_now = $this->parser->parseWeather($json);

        return $weather_now;
    }
}