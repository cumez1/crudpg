<?php
require_once 'model/test.php';
class TestController
{

    private $model;

    //Creación del modelo
    public function __construct(){
        $this->model = new test();
    }

    public function index()
    {
        //$this->model->Registrar();
        //$this->model->Eliminar();
        //$this->model->Actualizar();
        return $this->model->Listar();
    }
}
