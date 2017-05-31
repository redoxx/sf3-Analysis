<?php

namespace Medical\AnalysisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class DataManagerController extends Controller
{

	public function importAction(Request $request)
    {
    	$form = $this->get('form.factory')->createBuilder()
        ->add('submitFile',  FileType::class, array('label' => 'Upload Analysis codes (.csv)'))
        ->getForm();

		// Check if we are posting stuff
		if ($request->isMethod('POST')) {
			$form->handleRequest($request);
		    // If form is valid
		    if ($form->isValid()) {
		        // Get file
		        $file = $form->get('submitFile');

		        // Your csv file here when you hit submit button
		        $data = $file->getData();
		        // Generate a unique name for the file before saving it
	            $fileName = md5(uniqid()).'.'.$file->guessExtension();
	            echo "<pre>".print_r($file,1).'</pre>';
die;
	            // Move the file to the directory where brochures are stored
	            $file->move(
	                $this->getParameter('upload_dir'),
	                $fileName
	            );
	            $header = NULL;
		        $data = array();
		        
		        if (($handle = fopen($filename, 'r')) !== FALSE) {
		            while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE) {
		                if(!$header) {
		                    $header = $row;
		                } else {
		                    $data[] = array_combine($header, $row);
		                }
		            }
		            fclose($handle);
		        }
		        

		    }

		 }

		return $this->render('MedicalAnalysisBundle:DataManager:import.html.twig',
		    array('form' => $form->createView(),)
		);

    }
	
}
