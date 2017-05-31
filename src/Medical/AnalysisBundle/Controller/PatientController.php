<?php

namespace Medical\AnalysisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Medical\AnalysisBundle\Form\PatientType;
use Symfony\Component\HttpFoundation\Request;

class PatientController extends Controller
{
    /**
     * @Route("/Medical/list-patient")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $patients = $em->getRepository('MedicalAnalysisBundle:Patient')->findAll();
        return $this->render('MedicalAnalysisBundle:Patient:list.html.twig', array(
            'patients' => $patients
        ));
    }

    /**
     * @Route("/Medical/add-patient")
     */
    public function addAction()
    {
        return $this->render('MedicalAnalysisBundle:Patient:add.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/Medical/edit-patient")
     */
    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $patient = $em->getRepository('MedicalAnalysisBundle:Patient')->find($id);

        $form = $this->get('form.factory')->create(PatientType::class, $patient);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $em->persist($patient);
          $em->flush();

          $request->getSession()->getFlashBag()->add('notice', 'Modification bien enregistrée.');

          return $this->redirectToRoute('medical_patient_list');
        }

        return $this->render('MedicalAnalysisBundle:Patient:edit.html.twig', array(
          'form' => $form->createView(),
        ));
    }

}
