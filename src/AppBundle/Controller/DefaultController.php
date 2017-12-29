<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepageAction(Request $request)
    {
        return $this->render('web/homepage.html.twig');
    }

    /**
     * @Route("/bicicletas", name="bikes")
     */
    public function bikesAction(Request $request)
    {
        return $this->render('web/bikes.html.twig');
    }
}
