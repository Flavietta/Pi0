<?php

namespace SimpleUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SimpleUserController extends Controller
{
    public function indexAction()
    {
        return $this->render('SimpleUserBundle:Default:index.html.twig');
    }

    public function AfficheSimpleUserAction()
    {
        return $this->render('SimpleUserBundle:user:affiche.html.twig');
    }


}
