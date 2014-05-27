<?php

namespace Tudor\PagPersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TudorPagPersBundle:Default:index.html.twig', array('name' => $name));
    }
}
