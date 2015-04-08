<?php

namespace Nfq\WeatherBundle;

/**
 * Interface WeatherServiceInterface
 *
 * Interface for weather services
 * has method for implementation
 *
 * @package Nfq\WeatherBundle
 * @author   Valdemar Karasevic <valdemar.karasevic@gmail.com>
 */
interface WeatherServiceInterface
{
    /**
     * @param Location $location $location is an object with latitude and longitude parameters
     * @return mixed
     */
    public function getWeatherForLocation(Location $location);
}
