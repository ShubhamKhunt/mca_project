<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('SiteBundle:Default:index.html.twig');
    }
	
	public function encrypt($str) {
		return str_rot13($str);
	}
	
	public function decrypt($str) {
		return str_rot13($str);
	}
	
	public function upload($file){
		$upload_dir = $this->getParameter('upload_dir');
		$user_dir = $upload_dir.'/user/';
		if(!is_dir($user_dir)){
			mkdir($user_dir);
		}
		$dir_path = $user_dir.basename($file['name']);
		if(move_uploaded_file($file['tmp_name'], $dir_path)){
			return true;
		}
		return false;
	}
}
