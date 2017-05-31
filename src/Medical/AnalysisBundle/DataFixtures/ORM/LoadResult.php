<?php
// src/Medical/AnalysisBundle/DataFixtures/ORM/LoadResult.php

namespace Medical\AnalysisBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Medical\AnalysisBundle\Entity\Result;

class LoadResult implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    for($i=0; $i<10; $i++){
    	$p = new Result();
    	$p->setCode(uniqid(rand(10), true));
    	$p->setTitle('RESULT'.$i);
    	$p->setMin(random_int(2, 15));
    	$p->setMax(random_int(2, 22));
      // paersist data
    	$manager->persist($p);  	
    }
    
    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}
