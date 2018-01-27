<?php

namespace SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AuthController extends Controller
{
    public static function checkLogin(){
		$session = new Session();
		if($session->get('userid')){
			return true;
		}
		return false;
	}
}
