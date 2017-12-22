<?php

class Empleado
{

    // atributo para conexion a DB
    private $pdo;

    public function __construct()
    {
        try	{
			$this->pdo = Database::Conectar();
		} catch(Exception $e) {
			die($e->getMessage());
		}
    }

    public function Listar()
	{
		try {
			$result = array();
			$stm = $this->pdo->prepare("SELECT * FROM empleado ORDER BY id");
			$stm->execute();
			//return $stm->fetchAll(PDO::FETCH_OBJ);
            return $stm->fetchAll(PDO::FETCH_ASSOC);
		} catch(Exception $e) {
			//Obtener mensaje de error.
			die($e->getMessage());
		}
	}

    public function Guardar($datos = array())
	{
        $result = FALSE;
        if ((count($datos) == 0) or (!is_array($datos))) {
            return false;
        }

		try {
			$query = "INSERT INTO empleado (primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, dpi)
		        VALUES ('" . $datos['primer_nombre'] . "', '" . $datos['segundo_nombre'] . "',
                '" . $datos['primer_apellido'] . "', '" . $datos['segundo_apellido'] . "', '" . $datos['dpi'] . "')";

			$stm = $this->pdo->prepare($query);

            if ($stm) {
                $stm->execute();
                $result = TRUE;
            } else {
                $result = FALSE;
            }

		} catch (Exception $e) {
			die($e->getMessage());
		}

        return $result;
	}

    public function ObtenerPorId($id = NULL)
    {
        if ((!is_null($id)) && ($id === '')) {
            return FALSE;
        }

        try {
			$result = array();
			$stm = $this->pdo->prepare("SELECT * FROM empleado WHERE id = $id ");
			$stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
		} catch(Exception $e) {
			die($e->getMessage());
		}
    }

    public function Modificar($data = array())
    {
        $result = FALSE;
        if ((count($data) == 0) or (!is_array($data))) {
            return false;
        }

        try {
            $query = "UPDATE empleado SET primer_nombre = '" . $data['primer_nombre'] . "',
            segundo_nombre = '" . $data['segundo_nombre'] . "',
            primer_apellido = '" . $data['primer_apellido'] . "',
            segundo_apellido = '" . $data['segundo_apellido'] . "',
            dpi = '" . $data['dpi'] . "' WHERE id = ". $data['id'] ." ";

            $stm = $this->pdo->prepare($query);

            if ($stm) {
                $stm->execute();
                $result = TRUE;
            } else {
                $result = FALSE;
            }
        } catch (Exception $e) {

        }

        return $result;
    }

    public function Eliminar($id = NULL)
    {

    }
}
