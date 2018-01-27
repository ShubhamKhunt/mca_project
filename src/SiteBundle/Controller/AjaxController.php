<?php

namespace SiteBundle\Controller;

use SiteBundle\Entity\User_master;
use SiteBundle\Controller\DefaultController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AjaxController extends DefaultController
{
    /**
     * @Route("/ajax/getUserAvatar")
     */
    public function getUserAvatarAction(Request $request){
		
		$username = $request->get('username');
		if(isset($username)){
			$decryptUsername = $this->decrypt($username);
			$repository = $this->getDoctrine()->getRepository(User_master::class);
			$user = $repository->findOneBy(['username' => $decryptUsername]);
			if(!empty($user)){
				$data = array(
					'status' => 200,
					'message' => 'success',
					'url' => $user->img_url
				);
				echo json_encode($data);exit;
			}
		}
		$data = array(
			'status' => 500,
			'message' => 'error'
		);
		echo json_encode($data);exit;
    }
	
	/**
     * @Route("/ajax/isUniqueUsername")
     */
	public function isUniqueUsernameAction(Request $request){
		$username = $request->get('username');
		if(isset($username)){
			$decryptUsername = $this->decrypt($username);
			$repository = $this->getDoctrine()->getRepository(User_master::class);
			$user = $repository->findOneBy(['username' => $decryptUsername]);
			if(!empty($user)){
				$data = array(
					'status' => 100,
					'message' => 'username already exists'
				);
			}else{
				$data = array(
					'status' => 200,
					'message' => 'username is unique'
				);
			}
			echo json_encode($data);exit;
		}
		$data = array(
			'status' => 500,
			'message' => 'username is empty'
		);
		echo json_encode($data);exit;
	}
}
