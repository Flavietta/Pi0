<?php

namespace SimpleUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SimpleUserBundle:Default:index.html.twig');
    }
}
