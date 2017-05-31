<?php
// src/Medical/AnalysisBundle/DataFixtures/ORM/LoadPatient.php

namespace Medical\AnalysisBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Medical\AnalysisBundle\Entity\Patient;

class LoadPatient implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    for($i=0; $i<10; $i++){
    	$p = new Patient();
    	$p->setGender('Mr');
    	$p->setFullName('PATIENT'.$i);
    	$p->setBirthday(new \DateTime("15-09-1980"));
    	$p->setStatus(1);
    	$p->setAge(random_int(30, 50));
      // paersist data
    	$manager->persist($p);  	
    }
    
    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}
