<?php

namespace Nfq\WeatherBundle;

/**
 * Class WeatherLoader
 *
 * Class for loading current weather information from weather services
 *
 * @category WeatherLoader
 * @package  Nfq\WeatherBundle
 * @author   Valdemar Karasevic <valdemar.karasevic@gmail.com>
 */
class WeatherLoader
{
    /**
     * @param WeatherServiceInterface $weatherService $weatherService can be implemented by different weather services
     */
    public function __construct(WeatherServiceInterface $weatherService)
    {
        $this->weatherService = $weatherService;
    }

    /**
     * @param Location $location $location is object with longitude and latitude parameters
     *
     * @return mixed return current weather from injected weather service
     */
    public function getWeatherForLocation(Location $location)
    {
        return $this->weatherService->getWeatherForLocation($location);
    }
}
