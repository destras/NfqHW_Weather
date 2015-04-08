<?php

namespace Nfq\WeatherBundle;

use Buzz\Browser;

/**
 * Class YahooWeatherService
 *
 * Class gets current weather data from Yahoo Weathers API's
 *
 * @category YahooWeatherService
 * @package  Nfq\WeatherBundle
 * @author   Valdemar Karasevic <valdemar.karasevic@gmail.com>

 */
class YahooWeatherService implements WeatherServiceInterface
{
    /**
     * Construct object from injected YahooWeatherParser and Browser objects
     *
     * @param YahooWeatherParser $parser
     * @param Browser $browser
     */
    public function __construct(YahooWeatherParser $parser, Browser $browser)
    {
        $this->parser = $parser;
        $this->browser = $browser;
    }

    /**
     * Get current weather for passed Location by latitude and longitude
     *
     * @param Location $location $location is an object with latitude and longitude parameters
     *
     * @return mixed return current weather
     */
    public function getWeatherForLocation(Location $location)
    {
        $baseUrl = "http://query.yahooapis.com/v1/public/yql";
        $yqlQuery = 'select item.description from weather.forecast
            where woeid in (select woeid from geo.placefinder
            where text="'.$location->getLongitude().','.$location->getLatitude().'"
            AND gflags = "R")AND u="c"';
        $yqlQueryUrl = $baseUrl . "?q=" . urlencode($yqlQuery) . "&format=json";

        $response = $this->browser->get($yqlQueryUrl);
        $json = $response->getContent();

        $weatherNow = $this->parser->parseWeather($json);

        return $weatherNow;
    }
}
