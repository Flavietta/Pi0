<?php

namespace SuperUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SuperUserBundle:Default:index.html.twig');
    }
}
