<?php

namespace Nfq\WeatherBundle;

/**
 * Class Location
 *
 * Class for setting longitude ant latitude
 *
 * @package  Nfq\WeatherBundle
 * @author   Valdemar Karasevic <valdemar.karasevic@gmail.com>
 */

class Location
{
    protected $longitude;
    protected $latitude;

    /**
     * Construct object from longitude, latitude parameters
     *
     * @param float $longitude parameter for longitude coordinates (expl. 54.15)
     * @param float $latitude parameter for latitude coordinates (expl. 54.15)
     */
    public function __construct($longitude, $latitude)
    {
        $this->longitude = $longitude;
        $this->latitude = $latitude;
    }

    /**
     * Getter for longitude
     *
     * @return float longitude coordinates (expl. 54.15)
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Getter for latitude
     *
     * @return float latitude coordinates (expl. 54.15)
     */
    public function getLatitude()
    {
        return $this->latitude;
    }
}
