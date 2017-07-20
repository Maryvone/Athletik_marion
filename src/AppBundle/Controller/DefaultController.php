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
        $repository = $this->getDoctrine()->getManager();
        
       
        //affichage de la derniere et des 8 dernieres courses
        $em = $repository->createQuery('SELECT M FROM AppBundle:Meeting M ORDER BY M.id DESC');
        $course = $em->setMaxResults(9)->getResult();
        
  
        return $this->render('default/index.html.twig', ['meeting'=>$course]);

    }
    public function coursesAction(Request $request)
    {   
        $repository = $this->getDoctrine()->getManager();
        
        //menu
        $emCourses = $repository->getRepository('AppBundle:Meeting');
        $menu = $emCourses->findAll();      
  
        return $this->render('default/menu.html.twig', ['menucourses'=>$menu]);

    }
    
}
