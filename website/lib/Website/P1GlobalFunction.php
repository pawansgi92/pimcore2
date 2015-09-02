<?php

class Website_P1GlobalFunction {
    
	public static function getBaseUrl() {
	    return $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'];
	}
    
	public static function sendResponse($content) { //return content with json format
		$this->getResponse()
			->setHeader('Content-Type', 'json')
			->setBody($content)
			->sendResponse();
		exit;
	}

	public static function checkValidation($source, $fieldName=array()) { //return validation content with json format

	    $a= array();
	    $validate=array();
	    $notFound=array();

	    $i=0;
	    foreach ($source as $key => $value) {	    
        	if(!in_array($key, $fieldName)){
		    $notFound[$i]="paramter [$key] not found";
		    $i++;
        	}
            }
	    
	    return $notFound;
	}
		
	public static function CallAPI($method, $url, $data = false)
	{
	    $curl = curl_init();
	
	    switch (strtoupper($method))
	    {
		case "POST":
		    curl_setopt($curl, CURLOPT_POST, 1);
	
		    if ($data)
			curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		    break;
		case "PUT":
		    curl_setopt($curl, CURLOPT_PUT, 1);
		    break;
		default:
		    if ($data)
			$url = sprintf("%s?%s", $url, http_build_query($data));
	    }
	
	    // Optional Authentication:
//	    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//	    curl_setopt($curl, CURLOPT_USERPWD, "username:password");
	
	    curl_setopt($curl, CURLOPT_URL, $url);
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	
	    $result = curl_exec($curl);
	
	    curl_close($curl);
	
	    return $result;
	}

	public static function getActivities($name){
	    $getActivities   = new Object\LogActivities\Listing();
	    $getActivities->setCondition("name="."'".$name."'");

	    $activitiesId;
	    foreach($getActivities as $key) {
		    $activitiesId=$key->o_id;	
	    }

	    return $activitiesId;
	}

	public static function setLog(){

	    $ownerId = Object_Abstract::getById($owner);
            $activitiesId = Object_Abstract::getById($activities);
            
            $key=str_replace(' ', '_', strtolower($ownerId->name))."-".str_replace(' ', '_', strtolower($activitiesId->name)."-".rand());
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

            }else{

                echo "ERROR";
            
            }
    
	}

    
}