<?php

namespace AppBundle\Controller;

use DateTime;
use Doctrine\DBAL\Types\Type;
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
        
        //affiche toutes les courses passées
        $query_meetings = $repository->createQuery('SELECT m
                                                    FROM AppBundle:Meeting m
                                                    WHERE m.date < :now
                                                   ')->setParameter("now", new DateTime("NOW"), Type::DATETIME);
        $finished_meetings = $query_meetings->getResult();
  
        return $this->render('default/addResultatsCourses.html.twig', ['meeting'=>$finished_meetings]);

    }

     /**
     * @Route("/addResultats/{id}", name="addResultatsid")
     */
        public function addResultatsAthleteCourseAction(Request $request, $id)
    {   
        $repository = $this->getDoctrine()->getManager();
               
        $query_athlete_meetings = $repository->createQuery('SELECT m
                                                    FROM AppBundle:Result m
                                                    WHERE m.meeting = :id
                                                   ')->setParameter("id", $id);
        $resultat = $query_athlete_meetings->getResult();
          
        return $this->render('default/addResultatsAthletes.html.twig', ['resultatsathletes'=>$resultat]);

    }
}