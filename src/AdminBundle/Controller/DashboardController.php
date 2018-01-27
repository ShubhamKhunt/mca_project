<?php

namespace AdminBundle\Controller;

use SiteBundle\Controller\AuthController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DashboardController extends Controller
{
    /**
     * @Route("/dashboard", name="admin_dashboard_index")
	 * @Template()
     */
    public function indexAction(Request $request){
		if(!AuthController::checkLogin()){
			return $this->forward('SiteBundle:login:index');
		}
		return;
    }
}
