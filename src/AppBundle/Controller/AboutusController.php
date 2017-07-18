<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AboutusController extends Controller
{
   
     /**
     * @Route("/presentation", name="aboutus")
     */
    public function aboutusAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/aboutus.html.twig');
    }
    
    
}

