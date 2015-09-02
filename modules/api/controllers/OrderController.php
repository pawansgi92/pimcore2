<?php

use Api\Controller\Action;

class Api_OrderController extends Zend_Rest_Controller {

    public function init()
    {
        $this->_helper->viewRenderer->setNoRender(true);
		$this->_helper->AjaxContext()
                ->addActionContext('get','json')
                ->addActionContext('post','json')
                ->addActionContext('new','json')
                ->addActionContext('edit','json')
                ->addActionContext('put','json')
                ->addActionContext('delete','json')
                ->initContext('json');
    }
        
    private function sendResponse($content) {
		$this->getResponse()
			->setHeader('Content-Type', 'json')
			->setBody($content)
			->sendResponse();
		exit;
    }
    
    private function checkVaalidate(){

    } 
        
    public function unsetsessionAction()
    {

    }
    
    public function indexAction() {
        
    }
    
    public function headAction() {
        
    }
    
    public function getAction() {
        
    }

    public function postAction() {
        
    }
    
    public function putAction() {
        
    }
    
    public function deleteAction() {
        
    }
    
    public function cancelAction() {
        $id_order = $_POST['id_order'];
        $id_store = $_POST['id_store'];
	
	$return_array = array();
    
	//print_r($orders);
	//die();
	
	try
	{
	    if($id_order != "")
	    {
		// get order
		$orders = Object::getById($id_order);
		
		// check order exist
		if(count($orders) > 0 && $orders->o_className == 'Orders')
		{
		    // check store which credential to canceling order
		    if($orders->stores->o_id == $id_store)
		    {
			$orders->setPublished(0);	    
			$orders->save();
			
			//Set log
			$base_url = Website_P1GlobalFunction::getBaseUrl();
			$url_api = $base_url . '/core/log/set';
			$id_activity=Website_P1GlobalFunction::getActivities("agent_cancel_order");
			$array_object = json_encode(array("id_order" => $orders->o_id, "isdn" => $orders->customer->NRIC));
			$data =array("user" => $orders->agen->o_id, "activities" => $id_activity, "object" => $array_object);		
			$setLog=json_decode(Website_P1GlobalFunction::CallAPI("post", $url_api, $data));
			
			$return_array['status'] = 'success';
			$return_array['message'] = 'success';
			$return_array['data'] = $array_object;
		    }
		    else
		    {
			$return_array['status'] = 'failed';
			$return_array['message'] = 'User cannot allow to canceling order';
			$return_array['data'] = '';	    		    		    
		    }
		}
		else
		{
		    $return_array['status'] = 'failed';
		    $return_array['message'] = 'Order not exsist';
		    $return_array['data'] = '';	    		    
		}		
	    }
	    else
	    {
	        $return_array['status'] = 'failed';
		$return_array['message'] = 'Parameter invalid, id_order required';
		$return_array['data'] = '';	    		    				
	    }
	}
	catch(Exception $ex)
	{
	    $return_array['status'] = 'failed';
	    $return_array['message'] = 'Internal service error';
	    $return_array['data'] = '';	    
	}	

	$return_json = $this->_helper->json($return_array);
	$this->sendResponse($return_json);            
    }
    
}