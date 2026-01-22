<?php
require_once __DIR__ . "/../models/Usuario.php";
/*
El Controlador NO imprime HTML.
Si hay echo aquí, está mal.
*/

class UsuarioController
{

    //Acción: listar usuarios
    public function listar()
    {
        //1) Pedir los datos al modelo
        $usuarios = Usuario::obtenerTodos();
        //2)Devolver los datos (por ahora)
        return $usuarios;
    }
}
