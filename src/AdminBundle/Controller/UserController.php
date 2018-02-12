<?php
/**
 * Created by PhpStorm.
 * User: FALAVIO
 * Date: 2/5/2018
 * Time: 9:16 PM
 */

namespace AdminBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function AfficheAction()
    {
        return $this->render('AdminBundle:User:Affiche.html.twig');
    }
}