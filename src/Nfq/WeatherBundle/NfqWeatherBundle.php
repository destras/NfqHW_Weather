<?php

namespace Nfq\WeatherBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Nfq\WeatherBundle\DependencyInjection\NfqWeatherExtension;

class NfqWeatherBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new NfqWeatherExtension();
    }
}
