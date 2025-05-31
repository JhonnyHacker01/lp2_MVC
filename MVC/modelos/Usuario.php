<?php

require_once "Conn.php";

class Usuario{
    private $username;
    private $password;
    private $apellidos;
    private $nombres;
    private $tipo;
    private $id_escuela;
    private $email;

    public function __construct(){
    /*    $this->username = $username;
        $this->password = $password;
        $this->apellidos = $apellidos;
        $this->nombres = $nombres;
        $this->tipo = $tipo;
        $this->id_escuela = $id_escuela;
        $this->email = $email; */
    }

    public function mostrar(){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "SELECT * FROM usuario";
        $resultado = $conexion->query($sql);
        $conn->cerrar();
        return $resultado;
    }
    
    public function guardar($username, $password, $nombres, $apellidos, $tipo, $escuela, $email){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "INSERT * FROM usuario(username, password, nombres, apellidos, tipo, id_escuela, email) 
        VALUES ('$username', '$password', '$nombres', '$apellidos', '$tipo', '$escuela', '$email')";
        $resultado = $conexion->query($sql);
        $conn->cerrar();
        return $resultado;
    }
}