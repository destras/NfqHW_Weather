<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $location = $this->get('location');
        $location->__construct(54.6833333, 25.3166667);
        $weatherService = $this->get('nfq_weather')
            ->getWeatherForLocation($location);
        echo $weatherService;

        return $this->render('default/index.html.twig');
    }
}
