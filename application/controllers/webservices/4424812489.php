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
class 4424812489 extends CI_Controller{
    function __construct()
    {
        // Construct the parent class
        parent::__construct();
    }
    
    public function index() {
        //$data = json_decode($_POST['d'], true);
        date_default_timezone_set('America/Mexico_City');
        $_POST = json_decode(file_get_contents('php://input'), true);
        $arr_4424812489 = array();
        $arr_4424812489['numero'] = $_POST['numero'];
        $arr_4424812489['digito'] = $_POST['digito'];
        $arr_4424812489['numero1'] = $_POST['numero1'];
        $arr_4424812489['digito1'] = $_POST['digito1'];
        $arr_4424812489['timestamp'] = date('Y-m-d H:i:s');
        post_4424812489($arr_4424812489);

        header("HTTP/1.1 200 OK");
        header("Content-Type: application/json");
        $datos = array();
        $datos['resultado'] = 0;
        echo json_encode($datos);
    }
}
