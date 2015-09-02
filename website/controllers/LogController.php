<?php

use Website\Controller\Action;

class LogController extends Zend_Rest_Controller {

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

    public function indexAction() {

    }
    
    public function getAction() {

    }

    public function setAction() {

            $owner=$_POST['user'];
            $activities=$_POST['activities'];
            $object=$_POST['object'];

            $isValid=Website_P1GlobalFunction::checkValidation($_POST,array('user','activities','object'));
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


            $ownerId = Object_Abstract::getById($owner);
            $activitiesId = Object_Abstract::getById($activities);
                
            $key=str_replace(' ', '_', strtolower($ownerId->Name))."-".str_replace(' ', '_', strtolower($activitiesId->Name)."-".rand());
            $now                = date("Y-m-d,H-i");
            $getDateTime       = new Pimcore_Date($now);

            if($ownerId->o_className=="Customer"){

                $getId=Object_Abstract::getByPath('/log/customers');//get folder id

                $setLog     = new Object\LogCustomers();
                $setLog     ->setCustomers($ownerId);
                $setLog     ->setActivities($activitiesId);
                $setLog     ->setObjectContent($object);
                $setLog     ->setDatetime($getDateTime);
                $setLog     ->setO_parentId($getId->o_id);
                $setLog     ->setKey($key);
                $setLog     ->setPublished(1);
                $setLog     ->save();

                $status="Success";
                $message="Success";
                $data="Add Customer log Success";

            
            }else if($ownerId->o_className=="Agen"){

                $getId=Object_Abstract::getByPath('/log/agen');//get folder id

                $setLog     = new Object\LogAgents();
                $setLog     ->setAgen($ownerId);
                $setLog     ->setActivities($activitiesId);
                $setLog     ->setObjectContent($object);
                $setLog     ->setDatetime($getDateTime);
                $setLog     ->setO_parentId($getId->o_id);
                $setLog     ->setKey($key);
                $setLog     ->setPublished(1);
                $setLog     ->save();

                $status="Success";
                $message="Success";
                $data="Add Agen log Success";

            }else{

                $status="Field";
                $message="Log id not found";
                $data="Null";
            
            }

            $arrayReturn=array(    "status"    =>$status, 
                        "message"   =>$message, 
                        "data"      =>$data
                    );


            $json_log= $this->_helper->json($arrayReturn);
            Website_P1GlobalFunction::sendResponse($json_log);
    }
    
    public function headAction() {

    }

    public function putAction() {

    }

    public function deleteAction() {

    }

    public function postAction() {

    }

    public function newAction() {
        
    }


    public function loginAction() {

        $username   = $_POST['username'];
        $password   = $_POST['password'];

        if(isset($username) and isset($password) and (count($_POST) ==2)){
           
            $this->getAction();

        }else{
            
            $agen= array("status"=>"failed", "message"=>"invalid parameter !");
            
            $json_agen = $this->_helper->json($agen);
            $this->sendResponse($json_agen);
        
        }

    }

    public function logoutAction() {
        $username   = $_POST['username'];

        if(isset($username) !="" and (count($_POST) ==1)){
           
            $this->getAction();

        }else{
            
            $agen =array("status"=>"failed", "message"=>"invalid parameter !");
            
            $json_agen = $this->_helper->json($agen);
            $this->sendResponse($json_agen);
        
        }

    }


}