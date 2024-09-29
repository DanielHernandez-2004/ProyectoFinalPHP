<?php include 'conexion.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Usuarios y Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center">Gestión de Usuarios y Productos</h1>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="usuarios-tab" data-bs-toggle="tab" data-bs-target="#usuarios" type="button" role="tab" aria-controls="usuarios" aria-selected="true">Usuarios</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="productos-tab" data-bs-toggle="tab" data-bs-target="#productos" type="button" role="tab" aria-controls="productos" aria-selected="false">Productos</button>
        </li>
    </ul>

    <div class="tab-content mt-4" id="myTabContent">
        <!-- TAB DE USUARIOS -->
        <div class="tab-pane fade show active" id="usuarios" role="tabpanel" aria-labelledby="usuarios-tab">
            <h3 class="text-center">Gestión de Usuarios</h3>

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5>Lista de Usuarios</h5>
                <!-- Botón para agregar un nuevo usuario -->
                <a href="form_agregar_usuario.php" class="btn btn-primary">Agregar Nuevo Usuario</a>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM Usuarios";
                    $resultado = $conexion->query($sql);
                    if ($resultado->num_rows > 0) {
                        while ($fila = $resultado->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$fila['id']}</td>
                                    <td>{$fila['nombre']}</td>
                                    <td>{$fila['correo']}</td>
                                    <td>
                                        <form action='modificar_usuario.php' method='POST' class='d-inline'>
                                            <input type='hidden' name='id' value='{$fila['id']}'>
                                            <button class='btn btn-warning btn-sm'>Modificar</button>
                                        </form>
                                        <form action='eliminar_usuario.php' method='POST' class='d-inline'>
                                            <input type='hidden' name='id' value='{$fila['id']}'>
                                            <button class='btn btn-danger btn-sm'>Eliminar</button>
                                        </form>
                                    </td>
                                </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>No se encontraron usuarios</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- TAB DE PRODUCTOS -->
        <div class="tab-pane fade" id="productos" role="tabpanel" aria-labelledby="productos-tab">
            <h3 class="text-center">Gestión de Productos</h3>

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5>Lista de Productos</h5>
                <!-- Botón para agregar un nuevo producto -->
                <a href="form_agregar_producto.php" class="btn btn-primary">Agregar Nuevo Producto</a>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM Productos";
                    $resultado = $conexion->query($sql);
                    if ($resultado->num_rows > 0) {
                        while ($fila = $resultado->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$fila['id']}</td>
                                    <td>{$fila['nombre_producto']}</td>
                                    <td>{$fila['precio']}</td>
                                    <td>{$fila['cantidad']}</td>
                                    <td>
                                        <form action='modificar_producto.php' method='POST' class='d-inline'>
                                            <input type='hidden' name='id' value='{$fila['id']}'>
                                            <button class='btn btn-warning btn-sm'>Modificar</button>
                                        </form>
                                        <form action='eliminar_producto.php' method='POST' class='d-inline'>
                                            <input type='hidden' name='id' value='{$fila['id']}'>
                                            <button class='btn btn-danger btn-sm'>Eliminar</button>
                                        </form>
                                    </td>
                                </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No se encontraron productos</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>