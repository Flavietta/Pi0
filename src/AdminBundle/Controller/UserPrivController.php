<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserPrivController extends Controller
{
    public function AfficheAction()
    {
        return $this->render('AdminBundle:UserPrivilige:Affiche.html.twig');
    }
    public function AjouterAction(){
        return $this->render('AdminBundle:UserPrivilige:Ajouter.html.twig');
    }
}
