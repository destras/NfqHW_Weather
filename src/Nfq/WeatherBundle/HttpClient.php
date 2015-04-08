<?php
/**
 * Created by PhpStorm.
 * User: destas
 * Date: 4/8/15
 * Time: 2:12 PM
 */

namespace Nfq\WeatherBundle\Classes;



use Buzz\Browser;

class HttpClient
{
    public function __construct(Browser $browser)
    {
        $this->browser = $browser;
    }

    public function httpClient($url)
    {
        $response = $this->browser->get($url);
        return $response->getContent();
    }
}