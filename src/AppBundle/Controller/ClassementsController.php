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
    public function classementsAction()
    {
        $em = $this->getDoctrine()->getManager(); 
        
        $query =$em->createQuery('SELECT m FROM result m');
        //$query->setParameter(1, 'romanb');
        $meetings = $query->getResult();
        return $this->render('default/classements.html.twig', ['classements'=>$meetings]);
    }
    
    
}

