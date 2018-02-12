<?php
/**
 * Created by PhpStorm.
 * User: FALAVIO
 * Date: 2/5/2018
 * Time: 9:17 PM
 */

namespace AdminBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitController extends Controller
{
    public function AfficheAction()
    {
        return $this->render('AdminBundle:Produit:Affiche.html.twig');
    }
}