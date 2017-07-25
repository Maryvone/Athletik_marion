<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
     /**
     * @var \AppBundle\Entity\Athlete
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Athlete")
     */
    protected $athlete;


    function getAthlete(): \AppBundle\Entity\Athlete {
        return $this->athlete;
    }

     function setAthlete(\AppBundle\Entity\Athlete $athlete) {
        $this->athlete = $athlete;
    }
    
}