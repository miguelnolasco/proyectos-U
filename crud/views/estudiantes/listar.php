<?php
require_once 'controllers/EstudiantesController.php';
$controller = new EstudiantesController();
?>

<!-- Implementar código para mostrar la tabla con la lista de estudiantes -->
<div class="container mt-4">
    <h2>Lista de Estudiantes</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre Completo</th>
                <th>Carrera</th>
                <th>Ciclo Actual</th>
                <th>Edad</th>
                <th>Dirección</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php
        // Verificar si el controlador está instanciado antes de acceder a sus métodos
        if (isset($controller)) {
            // Obtener la lista de estudiantes desde el controlador
            $estudiantes = $controller->model->obtenerEstudiantes();

            // Recorrer la lista de estudiantes y mostrarlos en filas de la tabla
            foreach ($estudiantes as $estudiante) {
                echo '<tr>';
                echo '<td>' . $estudiante['id'] . '</td>';
                echo '<td>' . $estudiante['nombre_completo'] . '</td>';
                echo '<td>' . $estudiante['carrera'] . '</td>';
                echo '<td>' . $estudiante['ciclo_actual'] . '</td>';
                echo '<td>' . $estudiante['edad'] . '</td>';
                echo '<td>' . $estudiante['direccion'] . '</td>';
                echo '<td>
                <a href="index.php?action=editar&id=' . $estudiante['id'] . '" class="btn btn-primary btn-sm">Editar</a>
                <a href="index.php?action=eliminar&id=' . $estudiante['id'] . '" class="btn btn-danger btn-sm">Eliminar</a>
                      </td>';
                echo '</tr>';
            }
        }
        ?>
        </tbody>
    </table>
    <div class="text-end">
        <a href="index.php?action=agregar" class="btn btn-success">Agregar Estudiante</a>
        
    </div>
</div>
