<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepageid")
     */
    public function indexAction(Request $request)
    {   
        $em = $this->getDoctrine()->getManager();
        
        //récupérer un id
        $id = $request->query->get('id');
        
        //se connecter à une table et tout sortir
        $athlete = $em ->getRepository('AppBundle:Athlete');
        $queryAthlete = $athlete->findAll();
        
        //afficher des infos de deux tables
        //em
        $result = $em ->getRepository('AppBundle:Result');
        $queryResult = $result->findAll();
        
        //affiche le resultat d'une personne avec le temps et le nom de la course
        //em
        $query =$em->createQuery(
              'SELECT r FROM AppBundle:Result r WHERE r.athlete = :id'
                )->setParameter('id', $id);
        $bobo = $query->getResult();
        
        return $this->render('default/test.html.twig', ['athlete'=>$queryAthlete, 'result'=>$queryResult, 'bibi'=>$bobo]);
    }   
    /**
     * @Route("/test2", name="test2")
     */
    public function testidAction(Request $request)
    {   
        $em = $this->getDoctrine()->getManager();
        //récupérer un id
        $id = $request->query->get('id');
        //affiche le resultat d'une personne avec le temps et le nom de la course
 
        $query =$em->createQuery(
              'SELECT r FROM AppBundle:Result r WHERE r.athlete = :id'
                )->setParameter('id', $id);
        $bobo = $query->getResult();
        return $this->render('default/test2.html.twig', ['boob'=>$bobo]);
    }   
}
