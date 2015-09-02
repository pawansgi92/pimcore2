<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of testingapi
 *
 * @author PAWAN
 */
use Website\Controller\Action;

class TestingApiController extends Zend_Rest_Controller {

    
    public function index() {
        $entries = new Object_Customer_List();
        $entries->setOrder("desc");
        $entries->load();
        var_dump($entries);
    }

    function test() {
        echo "hello";
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
        
    }

}
