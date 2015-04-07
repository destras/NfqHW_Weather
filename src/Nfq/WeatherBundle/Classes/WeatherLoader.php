<?php
/**
 * Created by PhpStorm.
 * User: destas
 * Date: 4/7/15
 * Time: 11:27 AM
 */

namespace Nfq\WeatherBundle\Classes;


class WeatherLoader
{

    public function __construct(WeatherServiceInterface $weatherService) {
        $this->weatherService = $weatherService;

    }

    public function getWeather ($location) {

       return $this->weatherService->getWeather($location);

    }

}