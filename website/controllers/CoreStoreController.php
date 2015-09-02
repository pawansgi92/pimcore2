<?php

use Website\Controller\Action;

class CoreStoreController extends Zend_Rest_Controller {

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

    private function checkVaalidate(){

    } 

    
    public function indexAction() {

        $username=$_POST['username'];        

        $store= array(  "fieldName"=> $username,
                        "fieldType" => "email");// email, website, text, int, 
        
        Website_P1GlobalFunction::checkValidation("true",$store); // true required, false no
    }
    
    public function headAction() {
        
    }
    
    public function getAction() {
        
        $idstore   = $_POST['idstore'];
        $orderby   = $_POST['orderby'];
        $store     = array();
        $stores     = array();
        $return     = array();

        $isValid=Website_P1GlobalFunction::checkValidation($_POST,array('idstore','orderby'));
        if(count($isValid)>0){

            $arrayReturn = array(   
                    "status" => "failed",
                    "message" => "field not found",
                    "data" => $isValid
            );
        
            $json_plans = $this->_helper->json($arrayReturn);
            Website_P1GlobalFunction::sendResponse($json_plans);

            exit();
        }

        if (($orderby!="") or ($idstore!="")) {
        
            $field = array("o_id", "Name", "Address", "Longitude", "Latitude");//default paramter
            
            if (!in_array($orderby, $field)) { //field is true check in array or not
                $orderby="Name";
            }

            $setOrderKey=$orderby;
            $getStore = new Object\Stores\Listing();
           
            if(isset($idstore)){    
                $getStore->setCondition("o_id='".$idstore."'");
            }
           
            $getStore->setOrderKey($setOrderKey); 
            $i=0;
            
            foreach ($getStore as $key ) {

                $store[$i]= array(  "O_id"=>$key->o_id,    
                                    "Name"=>$key->Name,
                                    "Address" => $key->Address,
                                    "Longitude"=>$key->AddressPoints->Longitude,
                                    "Latitude"=>$key->AddressPoints->Latitude
                            );
                $i++;
            }

            if(isset($i) and $i<0){

            }


            $stores["status"] = "success";
            $stores["message"] = "success";
            $stores["data"] = $store;
            
            array_push($return, $stores);
       
        }else{
            $return= array( "status"=>"failed",
                "message" => "Paramter invalid, parameter orderby can't empty (is requred) !",
                "date"=>""
            );

        }

       

        $json_store = $this->_helper->json($return);
        Website_P1GlobalFunction::sendResponse($json_store);

    }

    public function postAction() {
        
    }
    
    public function putAction() {
        
    }
    
    public function deleteAction() {
        
    }
}