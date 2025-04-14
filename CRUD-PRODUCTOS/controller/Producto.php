<?php

require_once '../model/Producto.php';

class ProductoControlador {
    public function guardarProducto($nombre, $precio) {
        if (empty($nombre) || empty($precio) || !is_numeric($precio) || $precio <= 0) {
            return "Todos los campos son obligatorios y el precio debe ser un número mayor que cero.";
        }

        $producto = new Producto($nombre, $precio);
        if ($producto->guardar()) {
            return "Producto guardado exitosamente.";
        } else {
            return "Error al guardar el producto.";
        }
    }
}
