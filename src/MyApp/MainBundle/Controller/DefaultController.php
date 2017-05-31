<?php

namespace MyApp\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MainBundle:Default:index.html.twig');
    }

    public function contactAction()
    {
        return $this->render('MainBundle:Default:contact.html.twig');
    }

    public function navigationAction(Request $request)
    {
    	$currentRoute = $request->get('_route');
        // replace this example code with whatever you need
        return $this->render('MainBundle:Default:navigation.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'currentRoute' => $currentRoute,
        ]);

    }
}
