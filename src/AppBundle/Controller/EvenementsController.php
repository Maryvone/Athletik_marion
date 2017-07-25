<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Athlete;
use AppBundle\Form\Type\InscriptionType;
use DateTime;
use Doctrine\DBAL\Types\Type;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class EvenementsController extends Controller
{
   
     /**
     * @Route("/evenements_passes", name="passedevents")
     */
    public function eventspassedAction(Request $request)
    {
        $repository = $this->getDoctrine()->getManager();
        
        //affiche toutes les courses passées
        $query_meetings_passed = $repository->createQuery('SELECT m
                                                    FROM AppBundle:Meeting m
                                                    WHERE m.date < :now
                                                   ')->setParameter("now", new DateTime("NOW"), Type::DATETIME);
        $passed_meetings = $query_meetings_passed->getResult();

        
        // replace this example code with whatever you need
        return $this->render('default/evenementspasses.html.twig', ['coursespassees'=>$passed_meetings]);
    }
    /**
     * @Route("/evenements_futurs", name="futurevents")
     */
    public function eventsfutursAction(Request $request)
    {
        $repository = $this->getDoctrine()->getManager();
                
        //affiche toutes les courses futures
        $query_meetings_futures = $repository->createQuery('SELECT m
                                                    FROM AppBundle:Meeting m
                                                    WHERE m.date > :now
                                                   ')->setParameter("now", new DateTime("NOW"), Type::DATETIME);
        $futurs_meetings = $query_meetings_futures->getResult();
        
        // replace this example code with whatever you need
        return $this->render('default/evenementsfuturs.html.twig', ['coursesfutures'=>$futurs_meetings]);
    }
    
    /**
     * @Route("/inscription_course", name="inscriptioncourse")
     */
    public function inscriptioncourseAction(Request $request)
    {            
                        
        $form = $this->createForm(InscriptionType::class);
        
        $form->handleRequest($request);
                
        if ($form->isSubmitted() && $form->isValid()){
            
            $data = $form->getData();
                
            $athlete = new Athlete();
            
            $athlete->setLastname($data['nom']);
            $athlete->setFirstname($data['prenom']);
            
            $repository = $this->getDoctrine()->getManager();
            $repository = persist($athlete);
            $repository = flush();
        }
        
        

        
        return $this->render('default/inscriptioncourse.html.twig', ['form'=> $form->createview()]);
    }
    
    
}

