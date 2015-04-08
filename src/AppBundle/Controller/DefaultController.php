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
        $location->__construct(54.24, 54.24);
        $weatherService = $this->get('nfq_weather')
            ->getWeatherForLocation($location);


        return $this->
            render('default/index.html.twig', array('weather' => $weatherService));
    }
}
