<?php

namespace AppBundle\Controller;

use Nfq\WeatherBundle\Location;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $location = new Location(54.41, 25.19);
        $weatherService = $this->get('nfq_weather')
            ->getWeatherForLocation($location);


        return $this->
            render('default/index.html.twig', array('weather' => $weatherService));
    }
}
