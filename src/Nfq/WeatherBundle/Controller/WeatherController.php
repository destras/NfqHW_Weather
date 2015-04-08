<?php
/**
 * Created by PhpStorm.
 * User: destas
 * Date: 4/7/15
 * Time: 1:05 PM
 */

namespace Nfq\WeatherBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WeatherController extends Controller
{
    public function indexAction()
    {

        return $this->render('NfqWeatherBundle:Default:index.html.twig');
    }
}