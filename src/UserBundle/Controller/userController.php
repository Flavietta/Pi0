<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class userController extends Controller
{
    public function AfficherUserAction()
    {
        return $this->render('UserBundle:User:afficherUser.html.twig');
    }

    public function AfficherProduitUserAction()
    {
        return $this->render('UserBundle:User:afficherProduit.html.twig');
    }


    public function ajoutProduitUserAction()
    {
        return $this->render('UserBundle:User:ajoutProduit.html.twig');
    }




}
