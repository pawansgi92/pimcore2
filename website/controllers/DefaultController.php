<?php

use Website\Controller\Action;

class DefaultController extends Action {
	
	public function defaultAction () {
		$this->enableLayout();
	}
	
	public function defaultMobileAction () {
		
		$products_mobile = new Object\Bundle\Listing();
		$products_broadband = new Object\Plans\Listing();
		
		$this->view->products_mobile = $products_mobile;
		$this->view->products_broadband = $products_broadband;

		$this->enableLayout();
		$this->view->layout()->setLayout("layout_mobile");
	}

	public function autoloadProductBroadbandAction(){
		$products_mobile = new Object\Bundle\Listing();
		$products_broadband = new Object\Plans\Listing();
		
		$this->view->products_mobile = $products_mobile;
		$this->view->products_broadband = $products_broadband;

		$this->enableLayout();
		$this->view->layout()->setLayout("layout_mobile");
	}

	public function autoloadProductMobileAction(){
		$products_mobile = new Object\Bundle\Listing();
		$products_broadband = new Object\Plans\Listing();
		
		$this->view->products_mobile = $products_mobile;
		$this->view->products_broadband = $products_broadband;

		$this->enableLayout();
		$this->view->layout()->setLayout("layout_mobile");
	}

	public function cartCreditCheckPassedAction(){
		$this->enableLayout();
		$this->view->layout()->setLayout("layout_mobile");
	}

	public function cartCreditCheckFailedAction(){
		$this->enableLayout();
		$this->view->layout()->setLayout("layout_mobile");
	}

	public function compareProductAction(){
		$this->enableLayout();
		$this->view->layout()->setLayout("layout_mobile");
	}

	public function continuityMatrixAction(){
		$this->enableLayout();
		$this->view->layout()->setLayout("layout_mobile");
	}

	public function successPaymentAction(){
		$this->enableLayout();
		$this->view->layout()->setLayout("layout_mobile");	
	}

}
