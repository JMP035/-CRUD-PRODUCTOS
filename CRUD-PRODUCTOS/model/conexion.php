<?php

abstract class Conexion {
    protected static $conexion = null;

    public static function conectar(): PDO {
        if (self::$conexion === null) {
            try {
                self::$conexion = new PDO(
                    "informix:host=host.docker.internal; service=9088; database=tienda; server=informix; protocol=onsoctcp;EnableScrollableCursors=1",
                    "informix",
                    "in4mix"
                );
                self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Error de conexión a la base de datos: " . $e->getMessage());
            }
        }

        return self::$conexion;
    }
}
