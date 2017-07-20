<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class ResultatsController extends Controller
{
   
     /**
     * @Route("/resultats", name="resultats")
     */
    public function resultatsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        //récupérer un id
        $id = $request->query->get('id');
        
        //affiche le nom d'une course par son id
        $meeting = $em ->getRepository('AppBundle:Meeting');
        $queryResult = $meeting->findBy(array('id'=>$id));
         
        //affiche le resultat des athletes par l'id de la course avec le temps
        $result = $em ->getRepository('AppBundle:Result');
        $queryMeeting = $result->findBy(array('meeting'=>$id));
        
        return $this->render('default/resultats.html.twig', ['meeting'=>$queryResult, 'resultats'=>$queryMeeting]);
    }
    
    
}

