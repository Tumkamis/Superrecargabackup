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
class n4421015216 extends CI_Controller{
    function __construct()
    {
        // Construct the parent class
        parent::__construct();
    }
    
    public function index() {
        //$data = json_decode($_POST['d'], true);
        date_default_timezone_set('America/Mexico_City');
        $_POST = json_decode(file_get_contents('php://input'), true);
        $arr_n4421015216 = array();
        $arr_n4421015216['numero'] = $_POST['numero'];
        $arr_n4421015216['digito'] = $_POST['digito'];
        $arr_n4421015216['numero1'] = $_POST['numero1'];
        $arr_n4421015216['digito1'] = $_POST['digito1'];
        $arr_n4421015216['timestamp'] = date('Y-m-d H:i:s');
        post_n4421015216($arr_n4421015216);

        header("HTTP/1.1 200 OK");
        header("Content-Type: application/json");
        $datos = array();
        $datos['resultado'] = 0;
        echo json_encode($datos);
    }
}
