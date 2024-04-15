<?php

class accesModel
{
    private $db;
    private $usuario;

    public function __construct()
    {
        require_once("conexion.php");
        $this->db = Conectarse();
    }

    public function acceso($rutUsuario)
    {
        $consulta = mysqli_query($this->db, "SELECT * FROM perfiles WHERE rut = '$rutUsuario'");
        while ($filas = mysqli_fetch_array($consulta)) {
            $this->usuario[] = $filas;
        }
        return $this->usuario;
    }
}
