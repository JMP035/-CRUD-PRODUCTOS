<?php
require_once '../controller/Producto.php';

$mensaje = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controlador = new ProductoControlador();
    $mensaje = $controlador->guardarProducto($_POST['nombre'], $_POST['precio']);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card border-danger">
        <div class="card-header bg-danger text-white text-center">
            <h3>Crear Producto 🧰</h3>
        </div>
        <div class="card-body">

            <?php if ($mensaje): ?>
                <div class="alert alert-info text-center">
                    <?php echo $mensaje; ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="">
                <div class="mb-3">
                    <label class="form-label">Nombre del Producto:</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Precio del Producto:</label>
                    <input type="number" step="0.01" name="precio" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-danger w-100">Guardar Producto</button>
            </form>

        </div>
    </div>
</div>

</body>
</html>
