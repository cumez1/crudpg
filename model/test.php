<?php

class test
{
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = Database::Conectar();
        } catch (Exception $e) {
            die("Mensaje es: " . $e->getMessage());
        }
    }

    public function Listar()
	{
		try
		{
			$result = array();
			//Sentencia SQL para selección de datos.
			$stm = $this->pdo->prepare("SELECT * FROM test");
			//Ejecución de la sentencia SQL.
			$stm->execute();
			//fetchAll — Devuelve un array que contiene todas las filas del conjunto
			//de resultados
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch(Exception $e) {
			//Obtener mensaje de error.
			die($e->getMessage());
		}
	}

    public function Registrar()
	{
		try
		{
			//Sentencia SQL.
			$sql = "INSERT INTO test (nombre, apellido, telefono)
		        VALUES ('Edy', 'Jitz', '89203010')";

			$stm = $this->pdo->prepare($sql);

            if ($stm) {
                $stm->execute();
                echo "Registro Guardado";
            } else {
                echo "Error al registrar";
            }

		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

    public function Eliminar()
	{
		try
		{
			//Sentencia SQL para eliminar una tupla utilizando
			//la clausula Where.
			$stm = $this->pdo->prepare("DELETE FROM test WHERE id = 3");

            if ($stm) {
                $stm->execute();
                echo "Registro Elimnado";
            } else {
                echo "Error al eliminar";
            }
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

    public function Actualizar()
	{
		try
		{
			//Sentencia SQL para actualizar los datos.
			$sql = "UPDATE test SET apellido = 'Marmol' WHERE id = 5";
			//Ejecución de la sentencia a partir de un arreglo.
			$stm = $this->pdo->prepare($sql);
            if ($stm) {
                $stm->execute();
                echo "Actualizacion exitosa";
            } else {
                echo "Error al actualizar";
            }

		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
