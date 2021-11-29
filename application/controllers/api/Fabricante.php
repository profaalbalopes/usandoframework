<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Fabricante extends RestController{
    public function __construct(){
        parent::__construct();
        $this->load->model('FabricanteModel');
    }

    public function index_get(){
        $resultado = $this->FabricanteModel->recuperarTodos();
        $this->response($resultado, RestController::HTTP_OK);
    }



}