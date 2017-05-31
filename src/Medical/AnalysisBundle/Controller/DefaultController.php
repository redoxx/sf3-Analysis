<?php

namespace Medical\AnalysisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Medical\AnalysisBundle\Entity\Analyse;
use Medical\AnalysisBundle\Entity\Patient;
use Medical\AnalysisBundle\Entity\Laboratery;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MedicalAnalysisBundle:Default:index.html.twig');
    }

    public function addAnalyseAction()
    {
    	// analyse entity
    	$analyse = new Analyse();
    	$analyse->setTitle('medical analysis');
    	$analyse->setDateRdv(new \DateTime("now"));
    	$analyse->setStatus(true);
    	$analyse->setDescription('the description');
    	$analyse->setReferentDoctor('Dr cuqp');
    	// patient entity
    	$patient = new Patient();
    	$patient->setGender('Mr');
    	$patient->setFullName('redouane RABAHI');
    	$patient->setBirthday(new \DateTime("15-09-1980"));
    	$patient->setAge('36');
    	$patient->setStatus(true);
    	//laboratery entity
    	$lab = new Laboratery();
    	$lab->setTitle('labo 2');
    	$lab->setAddress('labo address - oran - Dz');
    	$lab->setImage("/tmp/img.jpg");
    	$lab->setStatus(true);

    	$analyse->setPatient($patient);
		$analyse->setLaboratery($lab);
		 // get EntityManager
	    $em = $this->getDoctrine()->getManager();

	    // persist entity
	    $em->persist($analyse);

	    // save
	    $em->flush();

    	return $this->render('MedicalAnalysisBundle:Default:addAnalyse.html.twig');	
    }

    public function editAnalyseAction($idAnalyse)
    {
    	$em = $this->getDoctrine()->getManager();
    	$a = $em->getRepository('MedicalAnalysisBundle:Analyse')->find($idAnalyse);
    	$a->setTitle('updated title');
    	$a->getPatient()->setFullName('updated fullname');
    	$em->flush();
    	return new Response('OK');
    }
}
