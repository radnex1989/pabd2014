<?php

namespace Daniel\MyPageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DanielMyPageBundle:Default:index.html.twig');
    }
}
