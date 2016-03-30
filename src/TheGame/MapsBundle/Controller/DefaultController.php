<?php

namespace TheGame\MapsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/maps")
     */
    public function indexAction()
    {
        return $this->render('TheGameMapsBundle:Default:index.html.twig');
    }
}
