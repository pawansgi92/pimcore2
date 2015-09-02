<?php

use Website\Controller\Action;

class CoreAgentController extends Zend_Rest_Controller {

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
    
    public function headAction() {
        
    }
    
    public function indexAction() {
        
    }

    public function getAgen($username,$password="",$action='error') {
        
        $queryCondition;
        $agen=array();

        $action;
        if(isset($username) and $password!=""){
           
            $queryCondition="Username='$username' and Password='".md5($password)."'";
            $activiesName="agen_create_new";

        }else if ($username!="") {

            $queryCondition="Username='$username'";
            
            if($action=="logout")
                $activiesName="agen_logout";  

        }else{

            $queryCondition="invalid";

        }

        if($queryCondition!="invalid"){

            $arrayReturn=array();
            $agen;

            $getAgen    = new Object\Agent\Listing();
            $getAgen->setCondition($queryCondition);

            if(count($getAgen)>0){
                foreach ($getAgen as $key) {

                    if($key->isActive=='1'){ //check active or deactive
                    
                        $agen= array(   "Name" => $key->Name,
                                        "Username" => $key->Username,
                                        "Password" => $key->Password,
                                        "Email" => $key->Email,
                                        "IsSaleSmall" => $key->IsSaleSmall,
                                        "IsSaleLarge" => $key->IsSaleLarge,
                                        "IsTelesales" => $key->Istelesales,
                                        "IsSales" => $key->IsSales,
                                        "IsActive" => $key->IsActive,
                                        "Role" => $key->Role->Name,
                                        "Role_o_id" => $key->Role->o_id
                        );

                        $getIdActivities=Website_P1GlobalFunction::getActivities($activiesName);//88 agen login        
                        $setLog=Website_P1GlobalFunction::setLog($key->o_id,$getIdActivities, $action);//88 agen login    

                        $arrayReturn=array(    
                                    "status"=>"success",
                                    "message"=>"$Action success",
                                    "data"=>$agen
                                    );

                    }else{
                        $arrayReturn = array(   
                                        "status" => "failed",
                                        "message" => "user is deactive",
                                        "data" => ""
                                    );      
                    }

                }

            }else{

                        $arrayReturn = array(   
                                        "status" => "failed",
                                        "message" => "user not found!",
                                        "data" => ""
                                    );                
                    }



        }else{
            
            $arrayReturn = array(
                           "status"=>"failed",
                           "message" => "invalid parameter username and password !" ,
                           "data" => ""                           
                        );
        
        }

        $json_agen = $this->_helper->json($arrayReturn);
        Website_P1GlobalFunction::sendResponse($json_agen);
    }


    public function postAction() {

    }
    
    public function putAction() {

    }
    
    public function deleteAction() {
        
    }
    
    public function getAction() {
            $username   = $_POST['username'];

            if(isset($username) !="" and (count($_POST) ==1)){
               
               $this->getAgen($username,"","get");

            }else{
                
                $arrayReturn =array(    "status"=>"failed", 
                                        "message"=>"invalid parameter !", 
                                        "data" => "");
                
                $json_agen = $this->_helper->json($arrayReturn);
                Website_P1GlobalFunction::sendResponse($json_agen);
            
            }

        }

    public function loginAction() {

        $username   = $_POST['username'];
        $password   = $_POST['password'];

        if(isset($username) and isset($password) and (count($_POST) ==2)){
           
            $this->getAgen($username,$password,"login");

        }else{
            
            $arrayReturn= array(    "status"=>"failed", 
                                    "message"=>"invalid parameter !",
                                    "data" => ""
                        );
            
            $json_agen = $this->_helper->json($arrayReturn);
            Website_P1GlobalFunction::sendResponse($json_agen);
        
        }

    }

    public function logoutAction() {
        $username   = $_POST['username'];

        if(isset($username) !="" and (count($_POST) ==1)){
           
            $this->getAgen($username,"","logout");

        }else{
            
            $arrayReturn =array(    "status"=>"failed", 
                                    "message"=>"invalid parameter !", 
                                    "data" => "");
            
            $json_agen = $this->_helper->json($arrayReturn);
            Website_P1GlobalFunction::sendResponse($json_agen);
        
        }

    }




}