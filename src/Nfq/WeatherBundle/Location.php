<?php
/**
 * Created by PhpStorm.
 * User: destas
 * Date: 4/8/15
 * Time: 3:26 PM
 */

namespace Nfq\WeatherBundle;


class Location
{
    protected $longitude;
    protected $latitude;

    public function __construct($longitude, $latitude)
    {
        $this->longitude = $longitude;
        $this->latitude = $latitude;
    }

    public function getLongitude ()
    {
        return $this->longitude;
    }

    public function getLatitude ()
    {
        return $this->latitude;
    }
}