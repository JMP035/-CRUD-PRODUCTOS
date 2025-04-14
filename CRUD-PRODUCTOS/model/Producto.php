<?php

require_once 'conexion.php';

class Producto extends Conexion {
    private $nombre;
    private $precio;

    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function guardar() {
        $conexion = self::conectar();
        $sql = "INSERT INTO productos (producto_nombre, producto_precio) VALUES (?, ?)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(1, $this->nombre);
        $stmt->bindParam(2, $this->precio);
        return $stmt->execute();
    }
}
