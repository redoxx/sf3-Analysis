<?php
// src/Medical/AnalysisBundle/DataFixtures/ORM/LoadLaboratery.php

namespace Medical\AnalysisBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Medical\AnalysisBundle\Entity\Laboratery;

class LoadLaboratery implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {
    for($i=0; $i<10; $i++){
    	$lab = new Laboratery();
      $lab->setTitle('labo '.$i);
      $lab->setAddress("labo $i address - oran - Dz");
      $lab->setImage("/tmp/img.jpg");
      $lab->setStatus(true);
      // paersist data
    	$manager->persist($lab);  	
    }
    
    // On déclenche l'enregistrement de toutes les catégories
    $manager->flush();
  }
}
