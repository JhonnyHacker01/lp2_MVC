<?php

class Conn {

    private $dsn;
    private $usuario;
    private $pass;
    private $conexion;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=udh;charset=utf8mb4";
        $this->usuario = "root";
        $this->pass = "";
    }

    public function conectar() {
        try {
            $this->conexion = new PDO(
                $this->dsn,
                $this->usuario,
                $this->pass,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            );
            return $this->conexion;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public function cerrar() {
        $this->conexion = null;
    }
}