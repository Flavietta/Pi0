<?php
/**
 * Created by PhpStorm.
 * User: FALAVIO
 * Date: 2/8/2018
 * Time: 12:55 AM
 */

namespace SuperUserBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ConseilsController extends Controller
{
    public function AjoutAction(){
        return $this->render('@SuperUser/Default/ajout_conseils.html.twig');
    }
}