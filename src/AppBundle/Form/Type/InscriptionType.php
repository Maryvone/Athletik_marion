<?php

namespace AppBundle\Form\Type;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class InscriptionType extends AbstractType{
    
    public function BuildForm(FormBuilderInterface $builder, array $options){
        
        $builder
                ->add('nom', TextType::class)
                ->add('prenom', TextType::class)
                ->add('birthdate', NumberType::class)
                ->add('Course', EntityType::class, array(
                    'class' => 'AppBundle:Meeting',
                    'choice_label'=>'name'
                ))
                ->add('Valider la demande d\'inscription', SubmitType::class, array(
                'attr' => array('class' => 'button large')))
                ;
                
                
    }
    
}

