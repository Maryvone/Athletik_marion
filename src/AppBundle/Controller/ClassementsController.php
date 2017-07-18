<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ClassementsController extends Controller
{
   
     /**
     * @Route("/classements", name="classements")
     */
    public function classementsAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/classements.html.twig');
    }
    
    
}

