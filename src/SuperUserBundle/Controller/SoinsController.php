<?php
/**
 * Created by PhpStorm.
 * User: FALAVIO
 * Date: 2/8/2018
 * Time: 3:14 AM
 */

namespace SuperUserBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SoinsController extends Controller
{
    public function AjoutAction(){
        return $this->render('@SuperUser/Default/ajout_soins.html.twig');
    }
}