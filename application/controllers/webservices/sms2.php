<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sms2
 *
 * @author marioeduardo
 */
class sms2 extends CI_Controller{
    //put your code here
    
    function __construct()
    {
        // Construct the parent class
        parent::__construct();
    }
    
    public function index() {
              //$data = json_decode($_POST['d'], true);
              date_default_timezone_set('America/Mexico_City');
              $_POST = json_decode(file_get_contents('php://input'), true);
              $arr_sms2 = array();
              $arr_sms2['numero'] = $_POST['numero'];
              $arr_sms2['resultado'] = $_POST['resultado'];
      
              post_sms2($arr_sms2);
        
        header("HTTP/1.1 200 OK");
        header("Content-Type: application/json");
        $datos = array();
        $datos['resultado'] = 0;
        echo json_encode($datos);
    }
}
