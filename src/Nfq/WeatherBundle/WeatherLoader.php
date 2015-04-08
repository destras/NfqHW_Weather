<?php
/**
 * Created by PhpStorm.
 * User: destas
 * Date: 4/7/15
 * Time: 11:27 AM
 */

namespace Nfq\WeatherBundle;


class WeatherLoader
{

    public function __construct(WeatherServiceInterface $weatherService)
    {
        $this->weatherService = $weatherService;
    }

    public function getWeatherForLocation (Location $location)
    {

        return $this->weatherService->getWeatherForLocation($location);

    }

}