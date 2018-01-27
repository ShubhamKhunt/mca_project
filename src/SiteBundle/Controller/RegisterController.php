<?php

namespace SiteBundle\Controller;

use SiteBundle\Entity\User_master;
use SiteBundle\Controller\AuthController;
use SiteBundle\Controller\DefaultController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class RegisterController extends DefaultController
{
    /**
     * @Route("/register")
	 * @Template()
     */
    public function indexAction(){
		if(AuthController::checkLogin()){
			return $this->forward('AdminBundle:Dashboard:index');
		}
		return;
    }
	
	/**
	* @Route("/register/save")
	*/
	public function saveAction(Request $request){
		
		$data = $request->request->all();
		if(!empty($data)){
			
			$img_url = '';
			try{
				if(isset($_FILES['img_url'])){
					if($this->upload($_FILES['img_url'])){
						$img_url = basename($_FILES['img_url']['name']);
					}
				}
				
				$user = new User_master();
				$user->setFirstname($data['firstname']);
				$user->setLastname($data['lastname']);
				$user->setEmail($data['email']);
				$user->setUsername($data['username']);
				$user->setPassword($data['password']);
				$user->setImg_url($img_url);
				$user->setAge($data['age']);
				$user->setGender($data['gender']);
				$user->setContact($data['contact']);
				$user->setAddress($data['address']);
				$user->setIsActive(0);
				$user->setIsRemove(0);
				
				$em = $this->getDoctrine()->getManager();
				$em->persist($user);
				$em->flush();
				
				$session = new Session();
				$session->set('userid', $user->getId());
				$session->set('firstname', $user->getFirstname());
				$session->set('lastname', $user->getLastname());
				$session->set('email', $user->getEmail());
				$session->set('username', $user->getUsername());
				$session->set('password', $user->getPassword());
				
				echo $session->get('userid');
				exit;
				
			}catch(Exception $e){
				echo $e->getMessage();
			}
			exit('end');
		}
	}
}
