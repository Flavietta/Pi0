<?php
/**
 * Created by PhpStorm.
 * User: FALAVIO
 * Date: 2/8/2018
 * Time: 12:55 AM
 */

namespace SuperUserBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserPrController extends Controller
{
    public function AfficheAction(){
        return $this->render('@SuperUser/SuserViews/afficherUserPriviligie.html.twig');
    }
}