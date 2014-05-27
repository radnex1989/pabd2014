<?php

namespace Andrei\PersonalPageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function pageAction($name)
    {
        return $this->render('AndreiPersonalPageBundle:Main:personalPage.html.twig', array('name' => $name));
    }
	
	public function contactAction($name)
    {
        return $this->render('AndreiPersonalPageBundle:Main:contact.html.twig', array('name' => $name));
    }
	
	public function newsAction($name)
    {
        return $this->render('AndreiPersonalPageBundle:Main:news.html.twig', array('name' => $name));
    }
}
