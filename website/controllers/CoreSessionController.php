<?php

use Website\Controller\Action;

class CoreSessionController extends Zend_Rest_Controller {


    private $coreSession;


    /**
     * init session controller
     */
    public function init()
    {
        parent::init();

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
    
    public function getOS($user_agent) { 

        $os_platform    =   "Unknown OS Platform";

        $os_array       =   array(
                                '/windows nt 10/i'      =>  'Windows 10',
                                '/windows nt 6.3/i'     =>  'Windows 8.1',
                                '/windows nt 6.2/i'     =>  'Windows 8',
                                '/windows nt 6.1/i'     =>  'Windows 7',
                                '/windows nt 6.0/i'     =>  'Windows Vista',
                                '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                '/windows nt 5.1/i'     =>  'Windows XP',
                                '/windows xp/i'         =>  'Windows XP',
                                '/windows nt 5.0/i'     =>  'Windows 2000',
                                '/windows me/i'         =>  'Windows ME',
                                '/win98/i'              =>  'Windows 98',
                                '/win95/i'              =>  'Windows 95',
                                '/win16/i'              =>  'Windows 3.11',
                                '/macintosh|mac os x/i' =>  'Mac OS X',
                                '/mac_powerpc/i'        =>  'Mac OS 9',
                                '/linux/i'              =>  'Linux',
                                '/ubuntu/i'             =>  'Ubuntu',
                                '/iphone/i'             =>  'iPhone',
                                '/ipod/i'               =>  'iPod',
                                '/ipad/i'               =>  'iPad',
                                '/android/i'            =>  'Android',
                                '/blackberry/i'         =>  'BlackBerry',
                                '/webos/i'              =>  'Mobile'
                            );

        foreach ($os_array as $regex => $value) { 

            if (preg_match($regex, $user_agent)) {
                $os_platform    =   $value;
            }

        }   

        return $os_platform;

    }


    public function getBrowser($user_agent) {

        $browser        =   "Unknown Browser";

        $browser_array  =   array(
                                '/msie/i'       =>  'Internet Explorer',
                                '/firefox/i'    =>  'Firefox',
                                '/safari/i'     =>  'Safari',
                                '/chrome/i'     =>  'Chrome',
                                '/opera/i'      =>  'Opera',
                                '/netscape/i'   =>  'Netscape',
                                '/maxthon/i'    =>  'Maxthon',
                                '/konqueror/i'  =>  'Konqueror',
                                '/mobile/i'     =>  'Handheld Browser'
                            );

        foreach ($browser_array as $regex => $value) { 

            if (preg_match($regex, $user_agent)) {
                $browser    =   $value;
            }

        }

        return $browser;

    }

    private function checkVaalidate($ipAddress){
        
       $setSession = new Object\Sessions\Listing();
       $setSession->setCondition("IpAddress='".$ipAddress."'");

       $results = array();
       foreach ($setSession as $result) {
            
            $results['status']="success";
            $results['message']="udapted";
            $results['data']= array(
                                "Id_session"    => $result->o_id,
                                "Ip_address"    => $result->IpAddress,
                                "Browser"       => $result->Browser,
                                "Os"            => $result->Os,
                                "O_key"         => $result->o_key,
                                "O_id"          => $result->o_id
                            ); 

       }

       if(empty($results)){
            $results=array(
                    "status"     =>"failed",
                    "message"    =>"Session ipaddress didn't exist",
                    "data"       =>""
                );
        }

       return $results;

    }

    public function setAction(){

        
        $ipAddress          =$_POST['ipaddress'];
        $array              = array();
        $arrays             = array();
        $http_user_agent    =$_SERVER['HTTP_USER_AGENT']; //get user agent information
        $getBrowser         = $this->getBrowser($http_user_agent);
        $getOS              =$this->getOS($http_user_agent);
        $key                =$ipAddress."_".rand();

        $now                = date("Y-m-d,H-i");
        $date               =  date("Y-m-d");
        $date               = strtotime($date);
        $date               = strtotime("+7 day", $date);
        $getStartDate       = new Pimcore_Date($now);
        $getExpiredDate     = new Pimcore_Date($date);


        $is_exist           = $this->checkVaalidate($ipAddress); //check is exsisting ip or new


        if($is_exist["status"]!="failed") {

            $this   ->putAction();
            $this   ->getAction();          
            
        }else{

            $getId=Object_Abstract::getByPath('/session/');//get folder id

            $setSession     = new Object\Sessions();
            $setSession     ->setCreatedAt($getStartDate);
            $setSession     ->setExpiredAt($getExpiredDate);
            $setSession     ->setMessage('setNew');
            $setSession     ->setStatus('Active');
            $setSession     ->setOs($getOS);
            $setSession     ->setBrowser($getBrowser);
            $setSession     ->setIpAddress($ipAddress);
            $setSession     ->setO_parentId($getId->o_id);
            $setSession     ->setKey($key);
            $setSession     ->setPublished(1);
            $setSession     ->save();

            //$startDate = date("d/m/Y",strtotime(new Pimcore_Date($session->date_tglBuat)));
            //$endDate= date("d/m/Y",strtotime(new Pimcore_Date($session->date_tglLahir)));

        

            $array['status']        ="success";
            $array['message']       = "success";
            $array['ip_address']    = $ip_address; //get active ip from user
            $array['browser']       = $getBrowser;
            $array['os']            = $getOS;

        }

        $json_session = $this->_helper->json($array);
        Website_P1GlobalFunction::sendResponse($json_session);

    }

    public function unsetsessionAction(){

    }
    
    public function indexAction() {
        
        Website_P1GlobalFunction::sendResponse($json_session);
        
    }
    
    public function headAction() {
        echo "head";        
    }
    
    public function getAction() {
        $ipAddress=$_POST['ipaddress'];
        $arrayReturn=array();

        if((count($_POST)==1) and isset($_POST['ipaddress'])){            

            if(isset($ipAddress)){

                $is_exist       = $this->checkVaalidate($ipAddress);
                $json_session   = $this->_helper->json($is_exist);
                Website_P1GlobalFunction::sendResponse($json_session);
            
            }else{

                
                $arrayReturn['status']    ="failed";
                $arrayReturn['message']   = "ip address cannot empty";
                $rrayReturn['data']      ="";

            }
        }else{
            
            $arrayReturn['status']    ="failed";
            $arrayReturn['message']   = "Wrong parameter";
            $arrayReturn['data']      ="";
        
        }

        $json_session  = $this->_helper->json($arrayReturn);
        Website_P1GlobalFunction::sendResponse($json_session);
    }

    public function postAction() {
        echo "post";
    }
    
    public function putAction() {

        $ipAddress     =$_POST['ipaddress'];
        $o_id;  
       

        $now            = date("Y-m-d,H-i");
        $date           =  date("Y-m-d");
        $date           = strtotime($date);
        $date           = strtotime("+7 day", $date);
        $getStartDate   = new Pimcore_Date($now);
        $getExpiredDate = new Pimcore_Date($date);
        
        $getO_id        = Object\Sessions::getByIpAddress($ipAddress);
        
        foreach ($getO_id as $key) { //get o_id
            $o_id=$key->o_id;
        }

        $updateSession = Object\Sessions::getById($o_id);
        $updateSession->setCreatedAt($getStartDate);
        $updateSession->setExpiredAt($getExpiredDate);
        $updateSession->setStatus('updated');                
        $updateSession->save();

    }
    
    public function deleteAction() {   
        
        echo "not yet finish";

    }
}