<?php

namespace Angelescu\angelescuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AngelescuangelescuBundle:Default:index.html.twig', array('name' => $name));
    }
}
