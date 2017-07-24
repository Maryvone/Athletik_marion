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

    $sql='SELECT SUM(result.points) as total, athlete.lastname, athlete.firstname 
        FROM result inner join athlete on result.athlete_id = athlete.id 
        inner join meeting on result.meeting_id = meeting.id 
        WHERE YEAR(CURRENT_DATE()) = 2017 GROUP BY athlete.id 
        ORDER BY total DESC';
        $toto=$em->getConnection()->prepare($sql);
        $toto->execute();
        $resultat=$toto->fetchAll();
        return $this->render('default/classements.html.twig',['classement'=>$resultat]);
    }
    
    
}

