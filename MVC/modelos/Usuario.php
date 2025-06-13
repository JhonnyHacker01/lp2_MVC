<?php

require_once "Conn.php";

class Usuario {
    private $username;
    private $password;
    private $apellidos;
    private $nombres;
    private $tipo;
    private $id_escuela;
    private $email;

    public function __construct() {
        /*
        $this->username = $username;
        $this->password = $password;
        $this->apellidos = $apellidos;
        $this->nombres = $nombres;
        $this->tipo = $tipo;
        $this->id_escuela = $id_escuela;
        $this->email = $email;

        */
    }





    public function buscar(int $id) {
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "SELECT * FROM usuario WHERE id = $id";
        $resultado = $conexion->query($sql);
        $conn->cerrar();
        return $resultado;
    }

    public function mostrar() {
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "SELECT * FROM usuario";
        $resultado = $conexion->query($sql);
        $conn->cerrar();
        return $resultado;
    }

    public function guardar($username, $password, $nombres, $apellidos, $tipo, $escuela, $email) {
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "INSERT INTO usuario (username, password, nombres, apellidos, tipo, id_escuela, email) 
        VALUES ('$username', '$password', '$nombres', '$apellidos', '$tipo', '$escuela', '$email')";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
        return $resultado;
    }

    public function actualizar($nombres, $apellidos, $tipo, $id) {
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "UPDATE usuario SET nombres='$nombres', apellidos='$apellidos', tipo='$tipo' WHERE id = $id"; 
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
        return $resultado;
    }


    public function eliminar($id) {
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "DELETE FROM usuario WHERE id = $id";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
        return $resultado;
    }
}