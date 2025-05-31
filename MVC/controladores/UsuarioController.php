<?php

require_once "modelos/Usuario.php";

class UsuarioController{
    public function guardar(array $datos){
        $usuario = new Usuario();
        $resultado = $usuario->guardar(
            $datos['username'],
            $datos['password'],
            $datos['nombres'],
            $datos['apellidos'],
            $datos['tipo'],
            $datos['escuela'],
            $datos['email'],);
            if ($resultado!=0) {
                return "Usuario registrado";
            } else {
                return "Error: no se registró el usuario";
            }
    }
}

    public function mostrar(){
        $usuario = new Usuario();
        return $usuario->mostrar();
    }

    public function eliminar(int $id){
        $usuario = new Usuario();
        $resultado = $usuario->eliminar($id);
        if ($resultado!=0) {
            header("Location: verUsuarios.php");
        } else {
            return "Error: no se eliminó el usuario";
        }
    }
