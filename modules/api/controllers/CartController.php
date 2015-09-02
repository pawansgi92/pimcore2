<?php

use Api\Controller\Action;

class Api_CartController extends Zend_Rest_Controller {

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
            
    public function indexAction() {
        
    }
    
    public function headAction() {
        
    }
    
    public function getAction() {
        $id_customer = $_GET['id_customer'];
	
	$return_array = array();
	
	try
	{
	    $carts = array();
	    if($id_customer != '')
	    {
		$carts = new Object\Carts\Listing();
		$carts->setCondition("customer__id = " . $id_customer . " and status = 'open'");
		$carts->setLimit(1);
		
		if($carts->Count() < 1)
		{
		    $return_array['status'] = 'failed';
		    $return_array['message'] = 'The customer haven\'t open cart';
		    $return_array['data'] = '';
		}
		else
		{
		    $getCart = array();
		    foreach($carts as $cart)
		    {
			$carts_detail = new Object\CartsDetail\Listing();
			$carts_detail->setCondition("carts__id = " . $cart->o_id);
			
			$getCart['bundle'] = array();
			$getCart['plans'] = array();
			foreach($carts_detail as $detail)
			{
			    $bundle = array();
			    $plans = array();
			    
			    if($detail->bundle != null)
			    {
				// object bundle
				$bundle['id'] = $detail->bundle->o_id;
				$bundle['name'] = $detail->bundle->name;
				$bundle['price'] = $detail->bundle->price;
				
				// object product
				$bundle['product']['id'] = $detail->bundle->product->o_id;
				$bundle['product']['name'] = $detail->bundle->product->name;
				$bundle['product']['price'] = $detail->bundle->product->price;
				$bundle['product']['code'] = $detail->bundle->product->code;
				$bundle['product']['deviceModel'] = $detail->bundle->product->deviceModel;
				$bundle['product']['isSmallProduct'] = $detail->bundle->product->is_small_product;
				$bundle['product']['isLargeProduct'] = $detail->bundle->product->is_large_product;
				$bundle['product']['description'] = $detail->bundle->product->description;
				$bundle['product']['rrp'] = $detail->bundle->product->rrp;
				
				// object plans
				$bundle['plan']['id'] = $detail->bundle->plans->o_id;
				$bundle['plan']['name'] = $detail->bundle->plans->name;
				$bundle['plan']['price'] = $detail->bundle->plans->price;
				$bundle['plan']['code'] = $detail->bundle->plans->code;
				$bundle['plan']['quota'] = $detail->bundle->plans->quota;
				$bundle['plan']['typeUsage'] = $detail->bundle->plans->typeUsage;
				$bundle['plan']['typePreferredNetwork'] = $detail->bundle->plans->typePreferredNetwork;
				$bundle['plan']['price'] = $detail->bundle->plans->price;
				
				foreach($detail->bundle->product->images as $image){ 
				    if(count($image)>0)
				    {
					$bundle['image'] = $_SERVER['REQUEST_SCHEME'] . '://' .  $_SERVER['HTTP_HOST'] . $image->Image->path . $image->Image->filename;
				    } 
				} 
													
				array_push($getCart['bundle'], $bundle);
			    }
			    
			    if($detail->plans != null)
			    {
				// object plans
				$plans['id'] = $detail->plans->o_id;
				$plans['name'] = $detail->plans->name;
				$plans['price'] = $detail->plans->price;
				$plans['code'] = $detail->plans->code;
				$plans['quota'] = $detail->plans->quota;
				$plans['typeUsage'] = $detail->plans->typeUsage;
				$plans['typePreferredNetwork'] = $detail->plans->typePreferredNetwork;
				$plans['price'] = $detail->plans->price;
				
				foreach($detail->plans->images as $image){ 
				    if(count($image)>0)
				    {
					$plans['image'] = $_SERVER['REQUEST_SCHEME'] . '://' .  $_SERVER['HTTP_HOST'] . $image->Image->path . $image->Image->filename;
				    } 
				} 
	    
				array_push($getCart['plans'], $plans);
			    }
			}		    
		    }
		    
		    $return_array['status'] = 'success';
		    $return_array['message'] = 'success';
		    $return_array['data'] = $getCart;	    
		}
	    }
	    else
	    {
		$return_array['status'] = 'failed';
		$return_array['message'] = 'Parameter invalid, need id customer';
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
    
    public function addAction() {
        $id_customer = $_POST['id_customer'];
        $id_product = $_POST['id_product'];
	
	$return_array = array();
	
	try
	{	    
	    // get cart open
	    $carts = new Object\Carts\Listing();
	    $carts->setCondition("customer__id = " . $id_customer . " and status = 'open'");
	    $carts->setLimit(1);
	    
	    $cart = array();
	    if($carts->Count() > 0)
	    {
		foreach($carts as $c)
		{
		    $cart = $c;
		}
	    }
	    else
	    {
		// get object customer
		$customer = Object::getById($id_customer);

		$now = date("Y-m-d,H-i");
		$get_time_now = new Pimcore_Date($now);
		
		$cart = Object\Carts::create();
		$cart->setKey(\Pimcore\File::getValidFilename('cart_' . $id_customer . '_' . $now));

		//to get and set ID PARENT FOLDER
		$id_folder = new Object_List();
		$id_folder->setCondition("o_key='carts-management'");		    
		$o_Pid = 0;
		foreach ($id_folder as $parent){
			$oidParent = $parent->getO_id();
		}
		$cart->setParentId($oidParent);

		$cart->setdate($get_time_now);
		$cart->setstatus("open");
		$cart->setcustomer($customer);		    
		
		$cart->setPublished(1);	    
		$cart->save();
		
		// Set log create cart
		$base_url = Website_P1GlobalFunction::getBaseUrl();
		$url_api = $base_url . '/core/log/set';
		$id_activity=Website_P1GlobalFunction::getActivities("customer_create_cart");
		$array_object = json_encode(array("id_cart" => $cart->o_id));
		$data =array("user" => $id_customer, "activities" => $id_activity, "object" => $array_object);		
		$setLog=json_decode(Website_P1GlobalFunction::CallAPI("post", $url_api, $data));
	    }
						
	    // count detail on cart
	    $carts_detail = new Object\CartsDetail\Listing();
	    $carts_detail->setCondition("carts__id = " . $cart->o_id);
	    $n_detail = $carts_detail->count();
	    
	    $object = Object::getById($id_product);
	    $type = $object->o_className;
	    
	    $newObject = Object\CartsDetail::create();
	    $newObject->setKey(\Pimcore\File::getValidFilename('detail' . ($n_detail + 1)));
	    $newObject->setParentId($cart->o_id);
	    $newObject->setcarts($cart);
	    
	    if(!($object->o_className == 'Plans' || $object->o_className == 'Bundle'))
	    {
		$return_array['status'] = 'failed';
		$return_array['message'] = 'Product not exist';
		$return_array['data'] = '';   		    		    
	    }
	    else
	    {
		if($type == "Bundle")
		{
		    $newObject->setbundle($object);		    
		}
		else if($type == "Plans")
		{
		    $newObject->setplans($object);		    
		}		
		$newObject->setPublished(1);	    
		$newObject->save();
		
		//Set log
		$base_url = Website_P1GlobalFunction::getBaseUrl();
		$url_api = $base_url . '/core/log/set';
		$id_activity=Website_P1GlobalFunction::getActivities("customer_add_cart_detail");
		$array_object = json_encode(array("id_cart_detail" => $newObject->o_id));
		$data =array("user" => $id_customer, "activities" => $id_activity, "object" => $array_object);		
		$setLog=json_decode(Website_P1GlobalFunction::CallAPI("post", $url_api, $data));
    
		if($setLog->status == "Success"){
		    $return_array['status'] = 'success';
		    $return_array['message'] = 'success';
		    $return_array['data'] = $array_object;   		    		    
		}
		else{
		    $return_array['status'] = 'failed';
		    $return_array['message'] = 'Failed create log customer';
		    $return_array['data'] = '';   		    		    
		}		
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

    public function removeAction() {
        $id_customer = $_POST['id_customer'];
        $id_cart_detail = $_POST['id_cart_detail'];
	
	$return_array = array();
	
	try
	{	    
	    // get cart open
	    $carts = new Object\Carts\Listing();
	    $carts->setCondition("customer__id = " . $id_customer . " and status = 'open'");
	    $carts->setLimit(1);
	    
	    if($carts->Count() > 0)
	    {
		$object = Object::getById($id_cart_detail);		    
		if(count($object) > 0 && $object->o_className == 'CartsDetail')
		{
		    $object->setPublished(0);	    
		    $object->save();
		    
		    //Set log
		    $base_url = Website_P1GlobalFunction::getBaseUrl();
		    $url_api = $base_url . '/core/log/set';
		    $id_activity=Website_P1GlobalFunction::getActivities("customer_remove_cart_detail");
		    $array_object = json_encode(array("id_cart_detail" => $object->o_id));
		    $data =array("user" => $id_customer, "activities" => $id_activity, "object" => $array_object);		
		    $setLog=json_decode(Website_P1GlobalFunction::CallAPI("post", $url_api, $data));
		    
		    $return_array['status'] = 'success';
		    $return_array['message'] = 'success';
		    $return_array['data'] = $array_object;
		}
		else
		{
		    $return_array['status'] = 'failed';
		    $return_array['message'] = 'Cart detail not exsist';
		    $return_array['data'] = '';	    		    
		}		    
	    }
	    else
	    {
		$return_array['status'] = 'failed';
		$return_array['message'] = 'Customer haven\'t cart open';
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
    
    public function checkoutAction() {
        $id_customer = $_POST['id_customer'];
	
	$return_array = array();
	
	try
	{	    
	    // get cart open
	    $carts = new Object\Carts\Listing();
	    $carts->setCondition("customer__id = " . $id_customer . " and status = 'open'");
	    $carts->setLimit(1);
	    
	    $cart = array();
	    if($carts->Count() > 0)
	    {
		foreach($carts as $c)
		{
		    $cart = $c;
		}
		
		// count detail on cart
		$carts_detail = new Object\CartsDetail\Listing();
		$carts_detail->setCondition("carts__id = " . $cart->o_id);
		$n_detail = $carts_detail->count();
		
		if($n_detail > 0)
		{
		    // get object customer
		    $customer = Object::getById($id_customer);

		    $now = date("Y-m-d,H-i");
		    $get_time_now = new Pimcore_Date($now);
		    
		    $newOrder = Object\Orders::create();
		    $newOrder->setKey(\Pimcore\File::getValidFilename('order_' . $id_customer. '_' . $now));
		    
		    //to get and set ID PARENT FOLDER
		    $id_folder = new Object_List();
		    $id_folder->setCondition("o_key='orders-management'");		    
		    $o_Pid = 0;
		    foreach ($id_folder as $parent){
			    $oidParent = $parent->getO_id();
		    }
		    $newOrder->setParentId($oidParent);

		    $newOrder->setcarts($cart);			
		    $newOrder->setcustomer($customer);
		    $newOrder->setorderDate($get_time_now);						
	
		    $newOrder->setPublished(1);	    
		    $newOrder->save();
		    
		    //Set log checkout cart
		    $base_url = Website_P1GlobalFunction::getBaseUrl();
		    $url_api = $base_url . '/core/log/set';
		    $id_activity=Website_P1GlobalFunction::getActivities("customer_checkout_cart");
		    $array_object = json_encode(array("id_order" => $newOrder->o_id));
		    $data =array("user" => $id_customer, "activities" => $id_activity, "object" => $array_object);		
		    $setLogCheckout=json_decode(Website_P1GlobalFunction::CallAPI("post", $url_api, $data));

		    $cart->setstatus("close");
		    $cart->save();			

		    //Set log close cart
		    $id_activity=Website_P1GlobalFunction::getActivities("customer_close_cart");
		    $array_object = json_encode(array("id_cart" => $cart->o_id));
		    $data =array("user" => $id_customer, "activities" => $id_activity, "object" => $array_object);		
		    $setLogClose=json_decode(Website_P1GlobalFunction::CallAPI("post", $url_api, $data));
		    
		    if($setLogClose->status == "Success" && $setLogCheckout->status == "Success")
		    {
			$return_data = json_encode(array("id_cart" => $cart->o_id, "id_order" => $newOrder->o_id));
			
			$return_array['status'] = 'success';
			$return_array['message'] = 'success';
			$return_array['data'] = $return_data;
		    }
		    else
		    {
			$return_array['status'] = 'Failed';
			$return_array['message'] = 'Failed checkout cart';
			$return_array['data'] = '';
		    }			
		}
		else
		{
		    $return_array['status'] = 'failed';
		    $return_array['message'] = 'Cart is empty';
		    $return_array['data'] = '';
		}				
	    }
	    else
	    {
		$return_array['status'] = 'failed';
		$return_array['message'] = 'Customer not have cart open';
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
    
    public function postAction() {
        
    }
    
    public function putAction() {
        
    }
    
    public function deleteAction() {
        
    }
}