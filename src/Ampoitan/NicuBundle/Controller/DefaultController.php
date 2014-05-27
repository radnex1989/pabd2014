<?php

namespace Ampoitan\NicuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AmpoitanNicuBundle:Default:index.html.twig', array('name' => $name));
    }
	
	public function contactAction($name)
    {
        return $this->render('AmpoitanNicuBundle:Default:contact.html.twig', array('name' => $name));
    }
	
	public function newsAction($name)
    {
        return $this->render('AmpoitanNicuBundle:Default:news.html.twig', array('name' => $name));
    }
}
