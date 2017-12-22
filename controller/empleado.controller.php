<?php
require 'model/empleado.php';
class EmpleadoController
{
    private $model;
    // instanciando modelo
    public function __construct()
    {
        $this->model = new empleado();
    }

    public function index()
    {
        $data = $this->model->Listar();

        require_once 'view/header.php';
        require_once 'view/empleado/empleado.php';
        require_once 'view/footer.php';
    }

    public function Nuevo()
    {
        require_once 'view/header.php';
        require_once 'view/empleado/nuevo_empleado.php';
        require_once 'view/footer.php';
    }

    public function Guardar()
    {
        //$data = $_REQUEST;
        foreach ($_REQUEST as $key => $value) {
            $data[$key] = trim($value);
        }

        $resultado = $this->model->Guardar($data);
        if ($resultado) {
            $_REQUEST['titulo'] = 'exito';
            $_REQUEST['message'] = 'Registro Guardado';
        } else {
            $_REQUEST['titulo'] = 'error';
            $_REQUEST['message'] = 'Error al guardar';

        }

        $this->Nuevo();
    }

    public function Buscar()
    {
        $data = $this->model->Listar();

        require_once 'view/header.php';
        require_once 'view/empleado/buscar_empleado.php';
        require_once 'view/footer.php';
    }

    public function Editar()
    {
        if (!isset($_REQUEST['id'])) {
            $_REQUEST['titulo'] = 'error';
            $_REQUEST['message'] = 'Error al procesar la informacion';
            $this->Buscar();
        } else {
            $data = $this->model->ObtenerPorId($_REQUEST['id']);
            $datoEmpleado = $data[0];
            require_once 'view/header.php';
            require_once 'view/empleado/editar_empleado.php';
            require_once 'view/footer.php';
        }
    }

    public function ConfirmarEdicion()
    {
        $datoValido = FALSE;
        $data = array();
        foreach ($_REQUEST as $key => $value) {
            if ($key !== 'a' && $key !== 'c') {
                $data[$key] = trim($value);
            }
        }

        $resultado = $this->model->Modificar($data);

        if ($resultado) {
            $_REQUEST['titulo'] = 'exito';
            $_REQUEST['message'] = 'Registro Guardado';
        } else {
            $_REQUEST['titulo'] = 'error';
            $_REQUEST['message'] = 'Error al guardar';
        }

        $this->Buscar();
    }

}
