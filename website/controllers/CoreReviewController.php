<?php

use Website\Controller\Action;

class CoreReviewController extends Zend_Rest_Controller {

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

    public function addAction()
    {
        $id_customer    = $_POST['id_customer'];
        $id_product     = $_POST['id_product'];
        $description    = $_POST['description'];
        $rate           = $_POST['rate'];
        // $data;



        $namekey        = str_replace(' ', '_', $id_customer)."_".strtotime(date("YmdHis"));

        $getCustomerObj = Object_Abstract::getById($id_customer);
        $getProductObj  = Object_Abstract::getById($id_product);

        $return_array   = array();
        

        // if($id_customer == "")
        // {
        //     $return_array['status']     = 'failed'; 
        //     $return_array['message']    = 'Customer ID is required'; 
        //     $return_array['data']       = ''; 
        // }
        // else if($id_product == "")
        // {
        //     $return_array['status']     = 'failed'; 
        //     $return_array['message']    = 'Product ID is required'; 
        //     $return_array['data']       = ''; 
        // }
        // else if($description == "")
        // {
        //     $return_array['status']     = 'failed'; 
        //     $return_array['message']    = 'Description is required'; 
        //     $return_array['data']       = ''; 
        // }
        // else if($rate == "")
        // {
        //     $return_array['status']     = 'failed'; 
        //     $return_array['message']    = 'Rate is required'; 
        //     $return_array['data']       = ''; 
        // }
        $getPath=Object_Abstract::getByPath('/review');

        $addreview      = array();
        $addreview      = new Object_Review();

        $addreview->setCustomer($getCustomerObj);
        $addreview->setProduct($getProductObj);
        $addreview->setDescription($description);
        $addreview->setRating($rate);

        $addreview->setKey(strtolower($namekey));
        $addreview->setO_parentId($getPath->o_id);
        $addreview->setIndex(0);
        $addreview->setPublished(0);
        $addreview->save();   

        $return_array['status']     = 'success';
        $return_array['message']    = 'Thank you for your review & rating';
        // $return_array['data']       = $addreview;

        $json_review = $this->_helper->json($return_array);
        Website_P1GlobalFunction::sendResponse($json_review);
        $this->sendResponse($json_review);

    } 

    public function editAction()
    {
        $valid          = true;
        $id_review      = $_POST['id_review'];
        $customer_id    = $_POST['customer_id'];
        $description    = $_POST['description'];
        $rate           = $_POST['rate'];
        $data;

        $return_array   = array();

        $getCustomerObj = Object_Abstract::getById($customer_id);

        $cekuser   = new Object\Review\Listing();
        $cekuser->setCondition("Customer__id = '$customer_id'");

        if($cekuser->Count() == 0 )
        {

            $return_array['status']     = 'success';
            $return_array['message']    = 'Customer not found';
            $return_array['data']       = '';
            $valid = false;
        }

        if($customer_id == "")
        {
            $return_array['status']     = 'failed'; 
            $return_array['message']    = 'Customer ID is required'; 
            $return_array['data']       = ''; 
            $valid                      = false;
        }
        else if($description == "")
        {
            $return_array['status']     = 'failed'; 
            $return_array['message']    = 'Description is required'; 
            $return_array['data']       = ''; 
            $valid                      = false;
        }
        else if($rate == "")
        {
            $return_array['status']     = 'failed'; 
            $return_array['message']    = 'Rate is required'; 
            $return_array['data']       = ''; 
            $valid                      = false;
        }
        else if($id_review == "")
        {
            $return_array['status']     = 'failed'; 
            $return_array['message']    = 'Review ID is required'; 
            $return_array['data']       = ''; 
            $valid                      = false;
        }

        if($valid)
        {

            $editreview      = array();
            $editreview      = Object_Review::getById($id_review);

            $editreview->setCustomer($getCustomerObj);
            $editreview->setDescription($description);
            $editreview->setRating($rate);
            $editreview->save();   

            $return_array['status']     = 'success';
            $return_array['message']    = 'Thank you for your review & rating';
            // $return_array['data']       = $editreview;
        }

        $json_review = $this->_helper->json($return_array);
        Website_P1GlobalFunction::sendResponse($json_review);
        $this->sendResponse($json_review);

    }    

    public function deleteAction()
    {
        $id_review      = $_POST['id_review'];
        $customer_id    = $_POST['customer_id'];
        $data;

        $return_array   = array();

        $getCustomerObj  = Object_Abstract::getById($customer_id);

        if($id_review == "")
        {
            $return_array['status']     = 'failed'; 
            $return_array['message']    = 'Review ID is required'; 
            $return_array['data']       = ''; 
        }
        else if($customer_id == "")
        {
            $return_array['status']     = 'failed'; 
            $return_array['message']    = 'Product ID is required'; 
            $return_array['data']       = ''; 
        }

        $deletereview      = array();
        $deletereview      = Object_Review::getById($id_review);

        // $deletereview->setIndex(0);
        $deletereview->setPublished(0);
        $deletereview->save();   

        // $delReview   = new Object\Review\Listing();
        // $delReview->setCondition("oo_id = '$id_review' ");

        // foreach ($delReview as $value) {
            $data = array(
                "Id" => $deletereview->o_id
                // "customer" => $deletereview->customer,
                // "Product" => $deletereview->product,
                // "Description" => $deletereview->description,
                // "Rating" => $deletereview->rating
            );
        // }
        



        $return_array['status']     = 'success';
        $return_array['message']    = 'Success delete your product rating';
        $return_array['data']       = $data;


        $json_review = $this->_helper->json($return_array);
        print_r($json_review);
        die();


        Website_P1GlobalFunction::sendResponse($json_review);
        

    }    

    public function getAction()
    {
        $id_review       = $_POST['id_review'];
        $id_product      = $_POST['id_product'];
        $return_array    = array();
        $data;

        // $isValid=Website_P1GlobalFunction::checkValidation($_POST,array('id_review'));
        // if(count($isValid)>0){

        //     $return_array = array(   
        //             "status" => "failed",
        //             "message" => "field not found",
        //             "data" => $isValid
        //     );   
        
        //     $json_review = $this->_helper->json($return_array);
        //     Website_P1GlobalFunction::sendResponse($json_review);

        //     exit();
        // }

        //     $return_array['data']       = '';

        // if( $id_review == "")
        // {
        //     $return_array['status']     = 'failed';
        //     $return_array['message']    = 'Review ID is required';
        // }
        // else
        // {
            $review   = new Object\Review\Listing();
            $review->setCondition("oo_id = '$id_review' ");
            $i=0;
            foreach ($review as $value) 
            {

                // print_r($value);
                $data[$i++]= array(   
                                "Rating" => $value->Rating,
                                "creationDate" => $value->o_creationDate,
                                "Description" => $value->Description,
                                "ProductID" => $value->Product->o_id,
                                "CustomerID" => $value->Customer->o_id,
                                "CustomerName" => $value->Customer->Name,
                                "CustomerUsername" => $value->Customer->Username
                        );

               // print_r($value);
            }
        // }


            $return_array['status']     = 'Success';
            $return_array['message']    = 'Success';
            $return_array['data']       = $data;

        // die();
        $json_review = $this->_helper->json($return_array);
        Website_P1GlobalFunction::sendResponse($json_review);
        
        // $this->sendResponse($json_review);

    }

    private function checkVaalidate(){

    } 
        
    public function unsetsessionAction()
    {
        Zend_Session::namespaceUnset('tasbih');
        die('unset');
    }
    
    public function indexAction() {
        
    }
    
    public function headAction() {
        
    }

    public function postAction() {
        
    }
    
    public function putAction() {
        
    }
}