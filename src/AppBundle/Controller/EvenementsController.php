<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EvenementsController extends Controller
{
   
     /**
     * @Route("/evenements", name="events")
     */
    public function eventsAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/evenements.html.twig');
    }
    
    
}

