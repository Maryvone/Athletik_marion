<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AddController extends Controller
{
    /**
     * @Route("/addResultats", name="addResultats")
     */

    public function addResultatsAction(Request $request)
    {   
        $repository = $this->getDoctrine()->getManager();
        
        //table meeting
        $emMeeting = $repository->getRepository('AppBundle:Meeting');
        $meeting = $emMeeting->findAll();
        
        //table resultat
        $emResultat = $repository->getRepository('AppBundle:Result');
        $resultat = $emResultat->findAll();  
  
        return $this->render('default/addResultatsCourses.html.twig', ['meeting'=>$meeting, 'resultat'=>$resultat]);

    }
    /**
     * @Route("/addResultats/{id}", name="addResultatsid")
     */

    public function addResultatsCourseAction(Request $request, $id)
    {   
        $repository = $this->getDoctrine()->getManager();
               
        //table resultat
        $emResultat = $repository->getRepository('AppBundle:Result');
        $resultat = $emResultat->findAll();
        
        //récupérer un id
        $id = $request->query->get('id');
         
        //affiche le resultat des athletes par l'id de la course avec le temps
        $result = $repository ->getRepository('AppBundle:Result');
        $queryMeeting = $result->findBy(array('meeting'=>$id));
  
        return $this->render('default/addResultats.html.twig', ['resultat'=>$resultat]);

    }
}