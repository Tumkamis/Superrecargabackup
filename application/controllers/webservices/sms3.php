<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of recarga
 *
 * @author marioeduardo
 */
class sms3 extends CI_Controller{
    function __construct()
    {
        // Construct the parent class
        parent::__construct();
    }
    
    public function index() {
        //$data = json_decode($_POST['d'], true);
        date_default_timezone_set('America/Mexico_City');
        $_POST = json_decode(file_get_contents('php://input'), true);
        $arr_sms3 = array();
        $arr_sms3['numero'] = $_POST['numero'];
        $arr_sms3['respuesta'] = $_POST['respuesta'];

        post_sms3($arr_sms);

        header("HTTP/1.1 200 OK");
        header("Content-Type: application/json");
        $datos = array();
        $datos['resultado'] = 0;
        echo json_encode($datos);
    }
}
