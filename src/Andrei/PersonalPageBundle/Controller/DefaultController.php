<?php

namespace Andrei\PersonalPageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AndreiPersonalPageBundle:Default:index.html.twig', array('name' => $name));
    }
}
