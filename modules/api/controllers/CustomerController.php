<?php

use Api\Controller\Action;

class Api_CustomerController extends Zend_Rest_Controller {

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

    public function raceAction()
    {
        $data;
        $return_array = array();

        $race   = new Object\Race\Listing();

        $i      = 0;
        foreach ($race as $value) {

            $data[$i++] = array(
                    "raceId" => $value->o_id,
                    "name" => $value->displayName
                );
        }
        
        $return_array['data']       = $data;

        $json_customer = $this->_helper->json($return_array);
        Website_P1GlobalFunction::sendResponse($json_customer);
        $this->sendResponse($json_customer);
    }

    public function nationalityAction()
    {
        $data;
        $return_array = array();

        $nationality   = new Object\Nationality\Listing();

        $i      = 0;
        foreach ($nationality as $value) {
            print_r($value);
            // $data[$i++] = array(
            //         "nationalityId" => $value->o_id,
            //         "name" => $value->displayName
            //     );
        }
        die();
        $return_array['data']       = $data;

        $json_customer = $this->_helper->json($return_array);
        Website_P1GlobalFunction::sendResponse($json_customer);
        $this->sendResponse($json_customer);
    }

    public function countryAction()
    {
        $data;
        $return_array = array();

        $country   = new Object\Country\Listing();

        $i      = 0;
        foreach ($country as $value) {

            $data[$i++] = array(
                    "countryId" => $value->o_id,
                    "name" => $value->displayName
                );
        }

        $return_array['data']       = $data;

        $json_customer = $this->_helper->json($return_array);
        Website_P1GlobalFunction::sendResponse($json_customer);
        $this->sendResponse($json_customer);
    }
        
    public function addAction()
    {
        $valid = true;
        $username           = $_POST['username'];
        $password           = $_POST['password'];
        $name               = $_POST['name'];
        $address            = $_POST['address'];
        $email              = $_POST['email'];
        $delivery_address   = $_POST['delivery_address'];
        $mailing_address    = $_POST['mailing_address'];
        $race               = $_POST['race'];
        $nationality        = $_POST['nationality'];
        $passport           = $_POST['passport'];
        $postcode           = $_POST['postcode'];
        $city               = $_POST['city'];
        $state              = $_POST['state'];
        $country            = $_POST['country'];
        $mobile             = $_POST['mobile'];
        $gender             = $_POST['gender'];

        $dob                = $_POST['dob'];
        $dateofbirth        = strtotime($dob);
        $date_ob            = new Pimcore_Date($dateofbirth);

        $namekey            = str_replace(' ', '_', $name)."_".strtotime(date("YmdHis"));
        $getRaceObj         = Object_Abstract::getById($race);
        $getNationalityObj  = Object_Abstract::getById($nationality);
        $getCountryObj      = Object_Abstract::getById($country);

        $return_array = array();

        // $cekuser   = new Object\Customer\Listing();
        // $cekuser->setCondition("username = '$username'");

        // if($cekuser->Count() >= 1 )
        // {

        //     $return_array['status']     = 'failed';
        //     $return_array['message']    = 'username is already used';
        //     $return_array['data']       = '';
        //     $valid = false;
        // }

        // if($username == "")
        // {
        //     $return_array['status']     = 'failed';
        //     $return_array['message']    = 'Username is required';
        //     $return_array['data']       = '';
        //     $valid = false;
        // } 
        // else if($password == "")
        // {
        //     $return_array['status']     = 'failed';
        //     $return_array['message']    = 'Password is required';
        //     $return_array['data']       = '';
        //     $valid = false;
        // }
        // else if($name == "")
        // {
        //     $return_array['status']     = 'failed';
        //     $return_array['message']    = 'Name is required';
        //     $return_array['data']       = '';
        //     $valid = false;
        // }
        // else if($address == "")
        // {
        //     $return_array['status']     = 'failed';
        //     $return_array['message']    = 'Address is required';
        //     $return_array['data']       = '';
        //     $valid = false;
        // }
        // else if($email == "")
        // {
        //     $return_array['status']     = 'failed';
        //     $return_array['message']    = 'Email is required';
        //     $return_array['data']       = '';
        //     $valid = false;
        // }
        // else if($delivery_address == "")
        // {
        //     $return_array['status']     = 'failed';
        //     $return_array['message']    = 'Delivery Address is required';
        //     $return_array['data']       = '';
        //     $valid = false;
        // }
        // else if($mailing_address == "")
        // {
        //     $return_array['status']     = 'failed';
        //     $return_array['message']    = 'Mailing Address is required';
        //     $return_array['data']       = '';
        //     $valid = false;
        // }
        // else if($race == "")
        // {
        //     $return_array['status']     = 'failed';
        //     $return_array['message']    = 'Race is required';
        //     $return_array['data']       = '';
        //     $valid = false;
        // }
        // else if($nationality == "")
        // {
        //     $return_array['status']     = 'failed';
        //     $return_array['message']    = 'Nationality is required';
        //     $return_array['data']       = '';
        //     $valid = false;
        // }

        if($valid)
        {
            

            $addregister    = array();
            $addregister    = new Object_Customer();

            $addregister->setusername($username);
            $addregister->setpassword($password);
            $addregister->setname($name);
            $addregister->setaddress($address);
            $addregister->setemailAddress($email);
            $addregister->setdeliveryAddress($delivery_address);
            $addregister->setmailingAddress($mailing_address);
            $addregister->setrace($getRaceObj);
            $addregister->setnationality($getNationalityObj);
            $addregister->setpassportNo($passport);
            $addregister->setPostcode($postcode);
            $addregister->setcity($city);
            $addregister->setstate($state);
            $addregister->setcountry($getCountryObj);
            $addregister->setmobileNo($mobile);
            $addregister->setgender($gender);
            $addregister->setdob($date_ob);

            $getPath    = Object_Abstract::getByPath('/customers');

            $addregister->setKey(strtolower($namekey));
            $addregister->setO_parentId($getPath->o_id);
            $addregister->setIndex(0);
            $addregister->setPublished(1);
            $addregister->save();   


             

            $return_array['status']     = 'success';
            $return_array['message']    = 'Thank you for your registration';
            $return_array['data']       = $addregister;
        }
                                                                                                                                                
        $json_customer = $this->_helper->json($return_array);
        Website_P1GlobalFunction::sendResponse($json_customer);
        $this->sendResponse($json_customer);

    }

    public function editAction()
    {
        $valid              = true;
        $id_customer        = $_POST['id_customer'];
        $username           = $_POST['username'];
        $password           = $_POST['password'];
        $name               = $_POST['name'];
        $address            = $_POST['address'];
        $email              = $_POST['email'];
        $delivery_address   = $_POST['delivery_address'];
        $mailing_address    = $_POST['mailing_address'];
        $race               = $_POST['race'];
        $nationality        = $_POST['nationality'];

        $getRaceObj         = Object_Abstract::getById($race);
        $getNationalityObj  = Object_Abstract::getById($nationality);

        $return_array       = array();
        $data;


        $cekuser   = new Object\Customer\Listing();
        $cekuser->setCondition("username = '$username'");

        if($cekuser->Count() >= 1 )
        {

            $return_array['status']     = 'failed';
            $return_array['message']    = 'username is already used';
            $return_array['data']       = '';
            $valid                      = false;
        }
        else if( $id_customer == "" )
        {
            $return_array['status']     = 'failed';
            $return_array['message']    = 'ID Customer is required';
            $return_array['data']       = '';
            $valid                      = false;
        }
        else if($username == "")
        {
            $return_array['status']     = 'failed';
            $return_array['message']    = 'Username is required';
            $return_array['data']       = '';
            $valid                      = false;
        } 
        else if($password == "")
        {
            $return_array['status']     = 'failed';
            $return_array['message']    = 'Password is required';
            $return_array['data']       = '';
            $valid                      = false;
        }
        else if($name == "")
        {
            $return_array['status']     = 'failed';
            $return_array['message']    = 'Name is required';
            $return_array['data']       = '';
            $valid                      = false;
        }
        else if($address == "")
        {
            $return_array['status']     = 'failed';
            $return_array['message']    = 'Address is required';
            $return_array['data']       = '';
            $valid                      = false;
        }
        else if($email == "")
        {
            $return_array['status']     = 'failed';
            $return_array['message']    = 'Email is required';
            $return_array['data']       = '';
            $valid                      = false;
        }
        else if($delivery_address == "")
        {
            $return_array['status']     = 'failed';
            $return_array['message']    = 'Delivery Address is required';
            $return_array['data']       = '';
            $valid                      = false;
        }
        else if($mailing_address == "")
        {
            $return_array['status']     = 'failed';
            $return_array['message']    = 'Mailing Address is required';
            $return_array['data']       = '';
            $valid                      = false;
        }
        else if($race == "")
        {
            $return_array['status']     = 'failed';
            $return_array['message']    = 'Race is required';
            $return_array['data']       = '';
            $valid                      = false;
        }
        else if($nationality == "")
        {
            $return_array['status']     = 'failed';
            $return_array['message']    = 'Nationality is required';
            $return_array['data']       = '';
            $valid                      = false;
        }
        
        if($valid)
        {
            $customer = Object_Customer::getById($id_customer);

            $customer->setusername($username);
            $customer->setpassword($password);
            $customer->setname($name);
            $customer->setaddress($address);
            $customer->setemailAddress($email);
            $customer->setdeliveryAddress($delivery_address);
            $customer->setmailingAddress($mailing_address);
            $customer->setrace($getRaceObj);
            $customer->setnationality($getNationalityObj);
            $customer->save();

            $return_array['status']     = 'success';
            $return_array['message']    = 'Success';
            $return_array['data']       = $customer;
        }
           
        $json_customer = $this->_helper->json($return_array);
        Website_P1GlobalFunction::sendResponse($json_customer);
        $this->sendResponse($json_customer);
    }

    
    public function getAction()
    {
        $username       = $_POST['username'];
        $return_array   = array();
        $data;

        if( $username == "")
        {
            $return_array['status']     = 'failed';
            $return_array['message']    = 'Parameter invalid, need username';
            $return_array['data']       = '';
        }
        else
        {
            $customer   = new Object\Customer\Listing();
            $customer->setCondition("username = '$username' ");
            foreach ($customer as $value) 
            {

                $data= array(   "username" => $value->username,
                                "name" => $value->name,
                                "address" => $value->address,
                                "email" => $value->emailAddress,
                                "delivery_address" => $value->deliveryAddress,
                                "mailing_address" => $value->mailingAddress,
                                "race" => $value->race,
                                "nationality" => $value->nationality
                                // "date"=> $value->dob
                        );

                $return_array['status']     = 'success';
                $return_array['message']    = 'Success';
                $return_array['data']       = $data;
            }
        }

        $json_customer = $this->_helper->json($return_array);
        Website_P1GlobalFunction::sendResponse($json_customer);
        $this->sendResponse($json_customer);

    }

    public function loginAction()
    {
        // print_r($_POST);die();

        session_start();
        $username       = $_POST['username'];
        $password       = $_POST['password'];
        $return_array   = array();
        $data;

        

        if( !empty($username) && !empty($password) )
        {
            $customer   = new Object\Customer\Listing();
            $customer->setCondition("username = ? AND password = ?", array($username, md5($password)));
            
            foreach ($customer as $value)
            {
                $_SESSION['username']   = $value->username;
                $_SESSION['name']       = $value->name;
                $_SESSION['o_id']       = $value->o_id;
                // $_SESSION['tes']       = "tes";

                $data= array(   
                                "name" => $value->name,
                                "username" => $value->username,
                                "oo_id" => $value->o_id
                        );

                $return_array['status']     = 'success';
                $return_array['message']    = 'Success';
                $return_array['data']       = $data;

                $base_url = Website_P1GlobalFunction::getBaseUrl();
                $url_api = $base_url . '/core/log/set';
                $id_activity=Website_P1GlobalFunction::getActivities("customer_login");
                $array_object = json_encode(array("customer_id" => $value->o_id));
                $data =array("user" => $value->o_id, "activities" => $id_activity, "object" => $array_object);      
                $setLog=json_decode(Website_P1GlobalFunction::CallAPI("post", $url_api, $data));
                
            }

        }
        else
        {
            $return_array['status']     = 'failed';
            $return_array['message']    = 'Username or Password is empty';
            $return_array['data']       = '';
        }

        $json_customer = $this->_helper->json($return_array);
        Website_P1GlobalFunction::sendResponse($json_customer);
        $this->sendResponse($json_customer);

    }

    public function logoutAction()
    {

        $username       = $_POST['username'];
        $return_array   = array();
        $data;        

        if( !empty($username))
        {
            $customer   = new Object\Customer\Listing();
            $customer->setCondition("username = ?", array($username));
        
            foreach ($customer as $value) 
            {
                session_start();
                session_destroy();

                $data= array(   "username" => $value->username
                        );

                $return_array['status']     = 'success';
                $return_array['message']    = 'Logout success';
                $return_array['data']       = $data;
            }             
        }
        else
        {
            $return_array['status']     = 'failed';
            $return_array['message']    = 'This user has been logout';
            $return_array['data']       = '';
        }

        $json_customer = $this->_helper->json($return_array);
        Website_P1GlobalFunction::sendResponse($json_customer);
        $this->sendResponse($json_customer);

    }

    public function unsetsessionAction()
    {

    }
    
    public function indexAction() 
    {
       
    }
    
    public function headAction() 
    {
        
    }

    public function postAction() 
    {
        
    }
    
    public function putAction() 
    {
        
    }
    
    public function deleteAction() 
    {
        
    }
}