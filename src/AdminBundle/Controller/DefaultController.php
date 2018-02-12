<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdminBundle:Default:index.html.twig');
    }
    public function AccueilAction()
    {
        return $this->render('@FOSUser/Profile/accueil.html.twig');
    }
}
