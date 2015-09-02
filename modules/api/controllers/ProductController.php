<?php

use Api\Controller\Action;

class Api_ProductController extends Zend_Rest_Controller {

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
                                    "o_key"=>$value->o_key,
                                    "o_id"=>$value->o_id,    
                                    "bundlename"=>$value->name,
                                    "price"     => $value->price,
                                    "product"   => array(
                                                            'productId' =>$value->product->o_id ,
                                                            'name' =>$value->product->name ,
                                                            'slugName' =>$value->product->slugName ,
                                                            'price' =>$value->product->price ,
                                                            'images' => array(
                                                                                'imageId' => $value->product->images->items[0]->Image->id, 
                                                                                'imageName' => $value->product->images->items[0]->ImageName,
                                                                                'filename' => $value->product->images->items[0]->Image->filename,
                                                                                'path' => $value->product->images->items[0]->Image->path,
                                                                                ),
                                                            'deviceModel' =>$value->product->deviceModel ,
                                                            'is_small_product' =>$value->product->is_small_product ,
                                                            'is_large_product' =>$value->product->is_large_product ,
                                                            'description' =>$value->product->description ,
                                                            'rrp' =>$value->product->rrp
                                                         ),
                                    "plans"     => array(
                                                            'plansId' =>$value->plans->o_id ,
                                                            'name' =>$value->plans->name ,
                                                            'slugName' =>$value->plans->slugName ,
                                                            'price' =>$value->plans->price ,
                                                            'code' =>$value->plans->code ,
                                                            'images' => array(
                                                                                'imageId' => $value->plans->images->items[0]->Image->id, 
                                                                                'imageName' => $value->plans->images->items[0]->ImageName,
                                                                                'filename' => $value->plans->images->items[0]->Image->filename,
                                                                                'path' => $value->plans->images->items[0]->Image->path,
                                                                                ),
                                                            'quotaquota'=>$value->plans->quota,
                                                            'typeUsage'=>$value->plans->typeUsage,
                                                            'typePreferredNetwork'=>$value->plans->typePreferredNetwork
                                                        ),
                                    "typeProduct" => "bundle"
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

                for($j=0; $j<count($value->images->items); $j++){

                    $imagePropertis[$j]=array(
                        'imageId' => $value->images->items[$j]->Image->id, 
                        'imageName' => $value->images->items[$j]->ImageName,
                        'filename' => $value->images->items[$j]->Image->filename,
                        'path' => $value->images->items[$j]->Image->path,
                        );

                }    

                if($value->is_small_product==1){
               
                     $small_product=array("type"=>$value->specificationLarge->items[0]->type,
                                                            "quota"=>$value->specificationLarge->items[0]->quota,
                                                            "numberOfUsers"=>$value->specificationLarge->items[0]->numberOfUsers,
                                                            "typeUsage"=>$value->specificationLarge->items[0]->typeUsage,
                                                            "typePreferredNetwork"=>$value->specificationLarge->items[0]->typePreferredNetwork,
                                                            "fieldname"=>$value->specificationLarge->items[0]->fieldname);

                }else{
               
                    $small_product= array();

                }

                if($value->is_large_product==1){
                     $large_product= array("type"=>$value->specificationLarge->items[0]->type,
                                                            "quota"=>$value->specificationLarge->items[0]->quota,
                                                            "numberOfUsers"=>$value->specificationLarge->items[0]->numberOfUsers,
                                                            "typeUsage"=>$value->specificationLarge->items[0]->typeUsage,
                                                            "typePreferredNetwork"=>$value->specificationLarge->items[0]->typePreferredNetwork,
                                                            "fieldname"=>$value->specificationLarge->items[0]->fieldname);
                }else{

                    $large_product= array();
               
                }

                $products[$i]= array(
                                    'o_id' =>$value->o_id ,
                                    'o_key' =>$value->o_key ,
                                    'name' =>$value->name ,
                                    'slugName' =>$value->slugName ,
                                    'price' =>$value->price ,
                                    'images' =>$imagePropertis,
                                    'deviceModel' =>$value->deviceModel ,
                                    'is_large_product' =>$value->is_large_product ,
                                    'is_small_product' =>$value->is_small_product ,
                                    'description' =>$value->description ,
                                    'rrp' =>$value->rrp,
                                    'specification' =>array("large_product"=>$large_product,
                                                            "small_product"=>$small_product
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
                                    "o_key" => $value->o_key,
                                    "o_id" => $value->o_id,
                                    "name" => $value->name,
                                    "slugName" => $value->slugName,
                                    "price" => $value->price,
                                    "code" => $value->code,
                                    "images" => array(  "imageId"=>$value->images->items[0]->Image->id,
                                                        "type"=>$value->images->items[0]->Image->type,
                                                        "ImageName"=>$value->images->items[0]->ImageName,
                                                        "filename"=>$value->images->items[0]->Image->filename, 
                                                        "path"=>$value->images->items[0]->Image->path
                                        ),
                                    "quota" => $value->quota,
                                    "typeUsage" => $value->typeUsage,
                                    "typePreferredNetwork" => $value->typePreferredNetwork,
                                    "typeProduct" => "plan"
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
        //die();
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
        $stocks->setCondition("product__id=".$id_product." and count=".$count." and stores__id=".$id_store."");                              
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
            $stocks->setCondition("product__id='".$id_product."'");                              
        }
        $stocks->setOrderKey("count");
        $stocks->setOrder("desc");

        $i=0;
        foreach ($stocks as $key => $value) {
            # code...

            $stock[$i]=array('o_id' => $value->o_id,
                              'product' => array(   'product_id' => $value->product->o_id,
                                                 'name' => $value->product->name,
                                                 'slugName' => $value->product->slugName,
                                                 'price' => $value->product->price->items[0],
                                                 'images' => $value->product->images,//array( "imageName"=>$value->product->images->items[0]->ImageName,
                                                              //      "filename"=>$value->product->images->items[0]->Image->filename,
                                                              //      "path"=>$value->product->images->items[0]->Image->path,
                                                              //      ),
                                                 'deviceModel' => $value->product->deviceModel, 
                                                 'is_small_product' => $value->product->is_small_product,
                                                 'is_large_product' => $value->product->is_large_product,
                                                 'description' => $value->product->description,
                                                 'rrp' => $value->product->rrp
                                                 ),
                              'stores' => array('product_id' => $value->product->o_id,
                                                 'name' => $value->product->name,
                                                 'address' => $value->product->slugName,
                                                 'addressPoints' =>array(   'longitude' => $value->stores->addressPoints->longitude,
                                                                            'latitude' => $value->stores->addressPoints->latitude
                                                                        )
                                                ),
                              'count' => $value->count,
                              'inOrder' => $value->inOrder,
                              'time_dmp_updated' => $value->o_id  
                            
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