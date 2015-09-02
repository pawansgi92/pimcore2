<?php

use Website\Controller\Action;

class CoreProductController extends Zend_Rest_Controller {



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
    
    private function sendResponse($content) {
		$this->getResponse()
			->setHeader('Content-Type', 'json')
			->setBody($content)
			->sendResponse();
		exit;
	}

    public function getAction()
    {
        echo "string";
    }

    public function getBundle( $id, $count, $offset, $orderBy, $order ){

        if (!isset($orderBy) or empty($orderBy)) {
            $orderBy="name";                                  
        } 

        if (!isset($order) or empty($order)) {
            $order="ASC";                                  
        }

        if (!isset($count) or empty($count)) {
            $count="10";                                  
        }

        $bundle = new Object\Bundle\Listing();    
        $bundle ->setOffset($offset);
        $bundle ->setLimit($count);
        $bundle ->setOrderKey($orderBy);
        $bundle ->setOrder($order);

        if (isset($id) and $id!="") {
            $bundle->setCondition("o_id='".$id."'");                              
        }
        
        $i=0;
        foreach ($bundle as $key => $value) {

            $bundles[$i]= array(   
                                    "O_key"=>$value->o_key,
                                    "O_id"=>$value->o_id,    
                                    "Bundlename"=>$value->Name,
                                    "Price"     => $value->Price,
                                    "Product"   => array(
                                                            'ProductId' =>$value->Product->o_id ,
                                                            'Name' =>$value->Product->Name ,
                                                            'SlugName' =>$value->Product->SlugName ,
                                                            'Price' =>$value->Product->Price ,
                                                            'Images' => array(
                                                                                'ImageId' => $value->Product->Images->items[0]->Image->id, 
                                                                                'ImageName' => $value->product->images->items[0]->ImageName,
                                                                                'Filename' => $value->product->images->items[0]->Image->filename,
                                                                                'Path' => $value->product->images->items[0]->Image->path,
                                                                                ),
                                                            'DeviceModel' =>$value->Product->DeviceModel ,
                                                            'Is_small_product' =>$value->Product->Is_small_product ,
                                                            'is_large_product' =>$value->Product->Is_large_product ,
                                                            'Description' =>$value->Product->Description ,
                                                            'Rrp' =>$value->Product->Rrp
                                                         ),
                                    "Plans"     => array(
                                                            'PlansId' =>$value->Plans->o_id ,
                                                            'Name' =>$value->Plans->Name ,
                                                            'SlugName' =>$value->Plans->SlugName ,
                                                            'Price' =>$value->Plans->Price ,
                                                            'Code' =>$value->Plans->Code ,
                                                            'Images' => array(
                                                                                'ImageId' => $value->Plans->Images->items[0]->Image->id, 
                                                                                'ImageName' => $value->Plans->Images->items[0]->ImageName,
                                                                                'Filename' => $value->Plans->Images->items[0]->Image->Filename,
                                                                                'Path' => $value->Plans->Images->items[0]->Image->path,
                                                                                ),
                                                            'Quotaquota'=>$value->Plans->Quota,
                                                            'TypeUsage'=>$value->Plans->TypeUsage,
                                                            'TypePreferredNetwork'=>$value->Plans->TypePreferredNetwork
                                                        ),
                                    "TypeProduct" => "bundle"
                        );
            $i++;
            
        }

        if($i>0){

            $status="success";
            $message="success";
        
        }else{

            $status="failed";
            $message="data not found";
        
        }

        $arrayReturn=array(    "status"    =>$status, 
                                "message"   =>$message, 
                                "data"      =>$bundles
                            );

        return $arrayReturn;

    }

    // get detail device information
    public function getDevices( $id, $count, $offset, $orderBy, $order ){ 

        if (!isset($orderBy) or empty($orderBy)) {
            $orderBy="name";                                  
        } 

        if (!isset($order) or empty($order)) {
            $order="ASC";                                  
        }

        if (!isset($count) or empty($count)) {
            $count="10";                                  
        }

        $product = new Object\Product\Listing();    
        $product ->setOffset($offset);
        $product ->setLimit($count);
        $product ->setOrderKey($orderBy);
        $product ->setOrder($order);

        if (isset($id) and $id!="") {
            $product->setCondition("o_id='".$id."'");                              
        }

        $i=0;
        foreach ($product as $key => $value) {

                $imagesArray=array();
                $return=array();
                $imagePropertis=array();

                for($j=0; $j<count($value->Images->items); $j++){

                    $imagePropertis[$j]=array(
                        'ImageId' => $value->Images->items[$j]->Image->id, 
                        'ImageName' => $value->Images->items[$j]->ImageName,
                        'Filename' => $value->Images->items[$j]->Image->filename,
                        'Path' => $value->Images->items[$j]->Image->path,
                        );

                }    

                if($value->Is_small_product==1){
               
                     $small_product=array("Type"=>$value->SpecificationLarge->items[0]->Type,
                                                            "Quota"=>$value->SpecificationLarge->items[0]->Quota,
                                                            "NumberOfUsers"=>$value->SpecificationLarge->items[0]->NumberOfUsers,
                                                            "TypeUsage"=>$value->SpecificationLarge->items[0]->TypeUsage,
                                                            "TypePreferredNetwork"=>$value->SpecificationLarge->items[0]->TypePreferredNetwork,
                                                            "Fieldname"=>$value->SpecificationLarge->items[0]->Fieldname);

                }else{
               
                    $small_product= array();

                }

                if($value->Is_large_product==1){
                     $large_product= array("Type"=>$value->SpecificationLarge->items[0]->Type,
                                                            "Quota"=>$value->SpecificationLarge->items[0]->Quota,
                                                            "NumberOfUsers"=>$value->SpecificationLarge->items[0]->NumberOfUsers,
                                                            "TypeUsage"=>$value->SpecificationLarge->items[0]->TypeUsage,
                                                            "TypePreferredNetwork"=>$value->SpecificationLarge->items[0]->TypePreferredNetwork,
                                                            "Fieldname"=>$value->SpecificationLarge->items[0]->Fieldname);
                }else{

                    $large_product= array();
               
                }

                $products[$i]= array(
                                    'O_id' =>$value->o_id ,
                                    'O_key' =>$value->o_key ,
                                    'Name' =>$value->Name ,
                                    'SlugName' =>$value->SlugName ,
                                    'Price' =>$value->Price ,
                                    'Images' =>$ImagePropertis,
                                    'DeviceModel' =>$value->DeviceModel ,
                                    'Is_large_product' =>$value->Is_large_product ,
                                    'Is_small_product' =>$value->Is_small_product ,
                                    'Description' =>$value->Description ,
                                    'Rrp' =>$value->Rrp,
                                    'Specification' =>array("Large_product"=>$Large_product,
                                                            "Small_product"=>$Small_product
                                                            )
                            );
                $i++;
        }

       if($i>0){

            $status="success";
            $message="success";
        
        }else{

            $status="failed";
            $message="data not found";
        
        }

        $arrayReturn =array(    "status"    =>$status, 
                                "message"   =>$message, 
                                "data"      =>$products
                            );

        return $arrayReturn;

    }

    //function get detail plan 
    public function getPlan( $id, $count, $offset, $orderBy, $order ){


        if (!isset($orderBy) or empty($orderBy)) {
            $orderBy="name";                                  
        } 

        if (!isset($order) or empty($order)) {
            $order="ASC";                                  
        }

        if (!isset($count) or empty($count)) {
            $count="10";                                  
        }

        $plan = new Object\Plans\Listing();   
        $plan ->setOffset($offset);
        $plan ->setLimit($count);
        $plan ->setOrderKey($orderBy);
        $plan ->setOrder($order);

        if (isset($id) and $id!="") {
            $plan->setCondition("o_id='".$id."'");                              
        }

        $plans  = array();

        $i=0;
        foreach ($plan as $key => $value) {


                $plans[$i]=array(   
                                    "O_key" => $value->o_key,
                                    "O_id" => $value->o_id,
                                    "Name" => $value->Name,
                                    "SlugName" => $value->SlugName,
                                    "Price" => $value->Price,
                                    "Code" => $value->Code,
                                    "Images" => array(  "ImageId"=>$value->Images->items[0]->Image->id,
                                                        "Type"=>$value->Images->items[0]->Image->type,
                                                        "ImageName"=>$value->Images->items[0]->ImageName,
                                                        "Filename"=>$value->Images->items[0]->Image->filename, 
                                                        "Path"=>$value->Images->items[0]->Image->path
                                        ),
                                    "Quota" => $value->Quota,
                                    "TypeUsage" => $value->TypeUsage,
                                    "TypePreferredNetwork" => $value->TypePreferredNetwork,
                                    "TypeProduct" => "plan"
                    );
                $i++;

            
        
        }

        $arrayReturn = array(   
                "status" => "success",
                "message" => "success",
                "data" => $plans
        );  


        return $arrayReturn;


    }

     public function getbundleAction()
    {

        $id         = $_POST['id'];
        $count      = $_POST['count'];
        $offset     = $_POST['offset'];
        $orderby    = $_POST['orderby'];
        $order      = $_POST['order'];
        $bundles   = array();

        $isValid=Website_P1GlobalFunction::checkValidation($_POST,array('id','count','offset','orderby','order'));
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
       
        $getBundle=$this->getBundle( $id, $count, $offset, $orderBy, $order);

        print_r($getBundle);
        die();

        //not yet field is collected on array $bundle (on progress)

        $json_bundles= $this->_helper->json($arrayReturn);
        Website_P1GlobalFunction::sendResponse($json_product);

    }

    public function getdevicesAction()
    {

        $id         = $_POST['id'];
        $count      = $_POST['count'];
        $offset     = $_POST['offset'];
        $orderby    = $_POST['orderBy'];
        $order      = $_POST['order'];
        $products   = array();

        $isValid=Website_P1GlobalFunction::checkValidation($_POST,array('id','count','offset','orderBy','order'));
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

        $devices= $this->getDevices( $id, $count, $offset, $orderBy, $order);

        $json_product = $this->_helper->json($devices);
        Website_P1GlobalFunction::sendResponse($json_product);

    }

     public function getproductAction(){

        $id         = $_POST['id'];
        $count      = $_POST['count'];
        $offset     = $_POST['offset'];
        $orderby    = $_POST['orderby'];
        $order      = $_POST['order'];
        $products   = array();

        $isValid=Website_P1GlobalFunction::checkValidation($_POST,array('id','count','offset','orderby','order'));
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


        $getProduct1['is_plans']=$this->getPlan( $id, $count, $offset, $orderBy, $order );
        $getProduct2['is_bundle']=$this->getBundle( $id, $count, $offset, $orderBy, $order );
        
        $getMergeProduct = array_merge($getProduct1,$getProduct2);
        // print_r($getMergeProduct);
        // die();
        $json_product = $this->_helper->json($getMergeProduct);
        Website_P1GlobalFunction::sendResponse($json_product);

        // print_r($getProduct);

        //     die();        

    }


    public function getplanAction(){

        $id         = $_POST['id'];
        $count      = $_POST['count'];
        $offset     = $_POST['offset'];
        $orderby    = $_POST['orderby'];
        $order      = $_POST['order'];
        
        $isValid=Website_P1GlobalFunction::checkValidation($_POST,array('id','count','offset','orderby','order'));
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

        $getPlan=$this->getPlan( $id, $count, $offset, $orderBy, $order );

        $json_plans = $this->_helper->json($getPlan);
        Website_P1GlobalFunction::sendResponse($json_plans);

    }

    public function checkstockAction()
    {

        $id_product     = $_POST['id_product'];
        $count          = $_POST['count'];
        $id_store       = $_POST['id_store'];

        $isValid=Website_P1GlobalFunction::checkValidation($_POST,array('id_product','count','id_store'));
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

        $dmpIdProduct=$id_product;
        $count=12;
        $dmpIdStore=$id_store;

        $stocks      = new Object\Stocks\Listing();
        $stocks->setCondition("Product__id=".$id_product." and Count=".$count." and Stores__id=".$id_store."");                              
        $stocks->setOrderKey("count");
        $stocks->setOrder("desc");

        $i=0;
        foreach ($stocks as $key => $value) {
           
            print_r($value);
            $i++;
        
        }

        $arrayReturn = array(   
                "status" => "failed",
                "message" => "field not found",
                "data" => "$value"
        );   
    
        $json_plans = $this->_helper->json($arrayReturn);
        Website_P1GlobalFunction::sendResponse($json_plans);            


    }



    public function getstockAction()
    {

        $id_product         = $_GET['id_product'];

        $isValid=Website_P1GlobalFunction::checkValidation($_GET,array('id_product'));
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

        $stocks      = new Object\Stocks\Listing();
        if ($id_product!="") {
            $stocks->setCondition("Product__id='".$id_product."'");                              
        }
        $stocks->setOrderKey("count");
        $stocks->setOrder("desc");

        $i=0;
        foreach ($stocks as $key => $value) {
            # code...

            $stock[$i]=array('O_id' => $value->o_id,
                              'Product' => array(   'Product_id' => $value->Product->o_id,
                                                 'Name' => $value->Product->Name,
                                                 'SlugName' => $value->Product->SlugName,
                                                 'Price' => $value->Product->Price->items[0],
                                                 'Images' => $value->Product->Images,//array( "imageName"=>$value->product->images->items[0]->ImageName,
                                                              //      "filename"=>$value->product->images->items[0]->Image->filename,
                                                              //      "path"=>$value->product->images->items[0]->Image->path,
                                                              //      ),
                                                 'DeviceModel' => $value->Product->DeviceModel, 
                                                 'Is_small_product' => $value->Product->Is_small_product,
                                                 'Is_large_product' => $value->Product->Is_large_product,
                                                 'Description' => $value->Product->Description,
                                                 'Rrp' => $value->Product->Rrp
                                                 ),
                              'Stores' => array('Product_id' => $value->Product->o_id,
                                                 'Name' => $value->Product->Name,
                                                 'Address' => $value->Product->SlugName,
                                                 'AddressPoints' =>array(   'Longitude' => $value->Stores->AddressPoints->Longitude,
                                                                            'Latitude' => $value->Stores->AddressPoints->Latitude
                                                                        )
                                                ),
                              'Count' => $value->Count,
                              'InOrder' => $value->InOrder,
                              'Time_dmp_updated' => $value->o_id  
                            
                            );
              
            $i++;

            $message="success";

        }
        if($i<1){
            $message="product id not found";
        }

        $arrayReturn = array(   
                "status" => "success",
                "message" => $message,
                "data" => $stock
        );   

        $json_stock = $this->_helper->json($arrayReturn);
        Website_P1GlobalFunction::sendResponse($json_stock);
    
    }

    public function searchAction()
    {
        /*
        $key        = $this->_getParam("search");
        $search     = new Object\Product\Listing();
        $search->setLimit(1);
        $search->setCondition("o_id = '" .$key. "'" );

        foreach ($search as $s) {
            $search = $s;
        }

        $this->view->key = $key;
        */

    }
        
    public function unsetsessionAction()
    {
        
    }
    
    public function indexAction() 
    {
        $aass=Website_P1GlobalFunction::CallAPI("POST", "http://p1.local/core/product/getproduct",array('a' =>"A" ));
        print_r(json_decode($aass));

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