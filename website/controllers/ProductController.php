<?php

use Website\Controller\Action;

class ProductController extends Action {
	
	public function productAction () {
        
        $list = new Object\Product\Listing();
        $list->setOrder('asc');

        $paginator = Zend_Paginator::factory($list);
		$paginator->setCurrentPageNumber( $this->_getParam('page') );
		$paginator->setItemCountPerPage(6);
		$paginator->setPageRange(5);
        
		$this->view->product = $paginator;
		$this->enableLayout();

	}

	public function productDetailAction() {
		$key = $this->_getParam('text');
		$id = $this->_getParam('id');

		$entries = Object_Abstract::getById($id);
		$data = $entries;
		
		$this->view->product = $data;
				
		$this->enableLayout();
		$this->view->layout()->setLayout("layout_mobile");
	}
	
	public function cartAction() {		
		$this->enableLayout();
		$this->view->layout()->setLayout("layout_mobile");		
	}
	
	public function deviceCompactibilityAction() {		
		$this->enableLayout();
		$this->view->layout()->setLayout("layout_mobile");		
	}

	public function creditCheckPassAction(){
		$this->enableLayout();
		$this->view->layout()->setLayout("layout_mobile");
	}
}
