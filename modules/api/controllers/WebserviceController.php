<?php

/**
 * Description of WebserviceController
 *
 * @author PAWAN
 */
use Api\Controller\Action;
use Api\models\TestModels;

class Api_WebserviceController extends Zend_Rest_Controller {

    public $email_reg = '/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/';

    public function init() {
        $this->_helper->viewRenderer->setNoRender(true);
        $this->_helper->AjaxContext()
                ->addActionContext('get', 'json')
                ->addActionContext('post', 'json')
                ->addActionContext('new', 'json')
                ->addActionContext('edit', 'json')
                ->addActionContext('put', 'json')
                ->addActionContext('delete', 'json')
                ->initContext('json');
    }

    private function sendResponse($content) {
        $this->getResponse()
                ->setHeader('Content-Type', 'json')
                ->setBody($content)
                ->sendResponse();
        exit;
    }

    public function deleteAction() {
        
    }

    public function getAction() {
        
    }

    public function headAction() {
        
    }

    public function indexAction() {
        
    }

    public function postAction() {
        
    }

    public function putAction() {

        $model = new Webservice_model();
        $model->pawanTesting();

        $mvc = new MVC_model();
        $mvc->pawan();
    }

    /*
     * To check object,array,variable
     */

    private function checkExists($val = '') {
        //added this as we using to initialize object with new stdClass from  this getNewObject(), thus when that empty object is passed for empty it return true(i.e exists value), so in order to avoid that mistake, just convert object to array and then when array will be check against for empty then it will return false(i.e no value exists)

        if (is_object($val) && in_array(strval(get_class($val)), array('stdClass')))
            $val = get_object_vars($val);

        if (is_string($val))
            $val = trim($val);

        if (empty($val) || is_null($val))
            return false;
        else
            return true;
    }

    /*
     * to Authenicate API and Secret key
     */

    private function authenicateUserAPIKey($data) {
        if ((strtoupper($data->API_KEY) == "123456") && (strtoupper($data->SECRET_KEY) == "123456")) {
            return 1;
        } else {
            return 0;
            $json = array('code' => "REG002-201", 'ErrorMsg' => "Invalid authentication");
            echo json_encode($json);
            exit;
        }
    }

    public function sendemail($password = "ddd", $username = "pawan@amsty.com") {
        $data = array(
            'password' => $password,
            'username' => $username
        );
        $mail = new \Pimcore\Mail();
        $mail->addTo($username);
        $mail->addBcc("pawan@amsty.com");
        $mail->setBodyHtml("<b>some</b> rich text and password" . $password);
        $mail->send();
    }

    /*
     * REG-API-003-I CREATE NEW SELFCARE USER
     */

    public function createuserAction() {
        // $errorMsg = "";
        error_reporting(1);

        $password = rand(8, 12);
        $content = $_POST['data'];
        $requestedData = json_decode($content);
        if ($this->checkExists($requestedData)) {
            if ($this->authenicateUserAPIKey($requestedData->auth)) {
                if (empty($requestedData->NRIC_PP) || !isset($requestedData->NRIC_PP) && $this->checkExists($requestedData->NRIC_PP)) {
                    $json = array('code' => "REG003-202", 'ErrorMsg' => "Missing fields. Please check all fields are provided.");
                    echo json_encode($json);
                    exit;
                } else if (empty($requestedData->IDType) || !isset($requestedData->IDType) && $this->checkExists($requestedData->IDType)) {
                    $json = array('code' => "REG003-202", 'ErrorMsg' => "Missing fields. Please check all fields are provided.");
                    echo json_encode($json);
                    exit;
                } else if (empty($requestedData->Username) || !isset($requestedData->Username) && $this->checkExists($requestedData->Username)) {
                    $json = array('code' => "REG003-202", 'ErrorMsg' => "Missing fields. Please check all fields are provided.");
                    echo json_encode($json);
                    exit;
                } else if (empty($requestedData->Fullname) || !isset($requestedData->Fullname) && $this->checkExists($requestedData->Fullname)) {
                    $json = array('code' => "REG003-202", 'ErrorMsg' => "Missing fields. Please check all fields are provided.");
                    echo json_encode($json);
                    exit;
                }
//                else if (!preg_match($email_reg, $requestedData->Username)) {
//                    $json = array('code' => "REG003-202", 'ErrorMsg' => "Please check all fields are provided correct.");
//                    echo json_encode($json);
//                    exit;
//                }
                //                else if (!preg_match($email_reg, $requestedData->Username)) {
//                    $json = array('code' => "REG003-202", 'ErrorMsg' => "Please check all fields are provided correct.");
//                    echo json_encode($json);
//                    exit;
//                }
                $addregister = array();
                $addregister = new Object_Customer();
                $namekey = str_replace(' ', '_', $requestedData->Fullname) . "_" . strtotime(date("YmdHis"));
                $addregister->setUsername($requestedData->Username);
                $addregister->setNRIC_PP($requestedData->NRIC_PP);
                $addregister->setPassword(md5($password));
                $addregister->setFullname($requestedData->Fullname);

                if (strtoupper($requestedData->IDType) != "PASSPORT") {
                    $addregister->setnationality("Malaysia");
                    $getNationalityObj = Object_Abstract::getById("Malaysia");
                }
                $getPath = Object_Abstract::getByPath('/customers');
                $addregister->setKey(strtolower($namekey));
                $addregister->setO_parentId($getPath->o_id);
                $addregister->setIndex(0);
                $addregister->setPublished(1);
                $response = $addregister->save();
                if ($this->checkExists($response)) {
                    $json = array('code' => "REG003-200", 'status' => "Success");
                    echo json_encode($json);
                    //   $this->sendemail($password, $requestedData->Username);
                    exit;
                } else {
                    $json = array('code' => "REG003-206", 'status' => "Unable to connect to server");
                    echo json_encode($json);
                    exit;
                }
            } else {
                $json = array('code' => "REG003-201", 'ErrorMsg' => "Invalid authentication");
                echo json_encode($json);
                exit;
            }
        } else {
            $json = array('code' => "REG003-203", 'status' => "failure", 'ErrorMsg' => "Json format is incorrect.");
            echo json_encode($json);
            exit;
        }
    }

    /*
     * REG-API-004-I GET USER ORDER
     */

    public function userorderAction() {
        //die("test");
        $content = $_POST['data'];
        $requestedData = json_decode($content);
        if ($this->checkExists($requestedData)) {
            if ($this->authenicateUserAPIKey($requestedData->auth)) {
                if (empty($requestedData->NRIC_PP) || !isset($requestedData->NRIC_PP) && $this->checkExists($requestedData->NRIC_PP)) {
                    $json = array('code' => "REG004-202", 'ErrorMsg' => "Missing fields. Please check all fields are provided.");
                    echo json_encode($json);
                    exit;
                } else if (empty($requestedData->Username) || !isset($requestedData->Username) && $this->checkExists($requestedData->Username)) {
                    $json = array('code' => "REG004-202", 'ErrorMsg' => "Missing fields. Please check all fields are provided.");
                    echo json_encode($json);
                    exit;
                } else if (empty($requestedData->EcomRefNoStatus) || !isset($requestedData->EcomRefNoStatus) && $this->checkExists($requestedData->EcomRefNoStatus)) {
                    $json = array('code' => "REG004-202", 'ErrorMsg' => "Missing fields. Please check all fields are provided.");
                    echo json_encode($json);
                    exit;
                }
                $username = $requestedData->Username;
                $NRIC_PP = $requestedData->NRIC_PP;

                $Customer = new Object\Customer\Listing();
                $Customer->setCondition("username = ? AND NRIC_PP = ?", array($username, $NRIC_PP));
                $Customer = $Customer->load();
                if ($this->checkExists($Customer)) {
                    foreach ($Customer as $val) {

                        $customerID = $val->o_id;
                        $Order = new Object\Orders\Listing();
                        $Order->setCondition("Customer__id = ?", $customerID);

                        $Order = $Order->load();
                        if ($this->checkExists($Order)) {
                            foreach ($Order as $ord) {
                                if ($ord->EcomRefNo && $ord->EcomRefNoStatus) {
                                    $data[] = array(
                                        'EcomRefNo' => $ord->EcomRefNo,
                                        'EcomRefNoStatus' => $ord->EcomRefNoStatus
                                    );
                                }
                            }
                            if ($this->checkExists($data)) {
                                $json = array('status' => "Success", 'EcomOrders' => $data);
                                echo json_encode($json);
                                exit;
                            } else {
                                $json = array('code' => "REG004-100", 'ErrorMsg' => "No Customer order found");
                                echo json_encode($json);
                                exit;
                            }
                        } else {
                            $json = array('code' => "REG004-100", 'ErrorMsg' => "No Customer order found");
                            echo json_encode($json);
                            exit;
                        }
                    }
                } else {
                    $json = array('code' => "REG004-202", 'ErrorMsg' => "No matching user(username with nric/passport number) found in system.");
                    echo json_encode($json);
                    exit;
                }
            } else {
                $json = array('code' => "REG004-201", 'ErrorMsg' => "Invalid authentication");
                echo json_encode($json);
                exit;
            }
        } else {
            $json = array('code' => "REG004-204", 'status' => "failure", 'ErrorMsg' => "Json format is incorrect.");
            echo json_encode($json);
            exit;
        }
    }

}
