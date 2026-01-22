<?php
require_once __DIR__ . "/../../config/conexion.php";

class Usuario
{

    //Obtener todos los usuarios
    public static function obtenerTodos()
    {
        $conn = Conexion::conectar();

        $sql = "SELECT id, usuario, correo FROM usuarios";
        $resultado = $conn->query($sql);

        $usuarios = [];

        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $usuarios[] = $fila;
            }
        }

        /*
        [
            ["id"=>1, "usuario"=>"admin", "correo"=>"admin@email.com"],
            ["id"=>2, "usuario"=>"juan", "correo"=>"juan@email.com"]
        ]
        */


        return $usuarios;
    }
}
