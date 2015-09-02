<?php

use Website\Controller\Action;

class SelfcareController extends Action {

	public function defaultAction () {
		$this->enableLayout();
	}

	public function selfCareOrderActivityAction(){
		$this->enableLayout();
		$this->view->layout()->setLayout("layout_mobile");	
	}

	public function selfCareOrderActivityDetailAction(){
		$this->enableLayout();
		$this->view->layout()->setLayout("layout_mobile");	
	}

	public function selfCareRegisterAction(){
		$this->enableLayout();
		$this->view->layout()->setLayout("layout_mobile");	
	}

	public function selfCareSuccessRegisterAction(){
		$this->enableLayout();
		$this->view->layout()->setLayout("layout_mobile");	
	}

	public function selfCareEmailVerificationAction(){
		$this->enableLayout();
		$this->view->layout()->setLayout("layout_mobile");	
	}

	public function selfCareNeedHelpAction(){
		$this->enableLayout();
		$this->view->layout()->setLayout("layout_mobile");	
	}

	public function selfCareResetPasswordAction(){
		$this->enableLayout();
		$this->view->layout()->setLayout("layout_mobile");	
	}

	public function selfCarePersonalInformationAction(){
		$this->enableLayout();
		$this->view->layout()->setLayout("layout_mobile");	
	}

	public function selfCareFaqAction(){
		$this->enableLayout();
		$this->view->layout()->setLayout("layout_mobile");	
	}

	public function selfCareOrderTrackingAction(){
		$this->enableLayout();
		$this->view->layout()->setLayout("layout_mobile");	
	}

	public function selfCareCheckCoverageAction(){
		$this->enableLayout();
		$this->view->layout()->setLayout("layout_mobile");	
	}

	public function selfCareAccountSummaryAction(){
		$this->enableLayout();
		$this->view->layout()->setLayout("layout_mobile");	
	}

	public function selfCareAccountSummaryDetailAction(){
		$this->enableLayout();
		$this->view->layout()->setLayout("layout_mobile");	
	}

	public function selfCareBillHistoryAction(){
		$this->enableLayout();
		$this->view->layout()->setLayout("layout_mobile");	
	}
}
