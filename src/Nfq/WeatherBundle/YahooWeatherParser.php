<?php

namespace Nfq\WeatherBundle;

/**
 * Class YahooWeatherParser
 *
 * Class parse data from Yahoo Weathers API's json file
 *
 * @category Yahoo_Weather_Service
 * @package  Nfq\WeatherBundle
 * @author   Valdemar Karasevic <valdemar.karasevic@gmail.com>
 */
class YahooWeatherParser
{
    /**
     * Function parse data from Yahoo Weathers API's json file
     * and return data about current weather in html.
     *
     * @param string $json it's json file from Yahoo Weather API
     *
     * @return string
     */
    public function parseWeather($json)
    {
        $phpObj = json_decode($json);
        $string = $phpObj->{'query'}->{'results'}
            ->{'channel'}->{'item'}->{'description'};
        $weatherNow = preg_split('/Forecast/', $string);

        return $weatherNow[0];
    }
}
