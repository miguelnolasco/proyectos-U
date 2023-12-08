
<!-- views/estudiantes/editar.php -->
<div class="container mt-4">
    <h2>Editar Estudiante</h2>
    <form action="index.php?action=editar&id=<?php echo $estudiante['id']; ?>" method="post">
        <!-- Campos del formulario con los datos del estudiante a editar -->
        <div class="mb-3">
            <label for="nombre_completo" class="form-label">Nombre Completo:</label>
            <input type="text" name="nombre_completo" value="<?php echo $estudiante['nombre_completo']; ?>" required class="form-control">
        </div>

        <div class="mb-3">
            <label for="carrera" class="form-label">Carrera:</label>
            <input type="text" name="carrera" value="<?php echo $estudiante['carrera']; ?>" required class="form-control">
        </div>

        <div class="mb-3">
            <label for="ciclo_actual" class="form-label">Ciclo Actual:</label>
            <input type="text" name="ciclo_actual" value="<?php echo $estudiante['ciclo_actual']; ?>" required class="form-control">
        </div>

        <div class="mb-3">
            <label for="edad" class="form-label">Edad:</label>
            <input type="number" name="edad" value="<?php echo $estudiante['edad']; ?>" required class="form-control">
        </div>

        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección:</label>
            <input type="text" name="direccion" value="<?php echo $estudiante['direccion']; ?>" required class="form-control">
        </div>

        <!-- Botones de guardar cambios y cancelar -->
        <div class="mb-3">
            <input type="submit" name="action" value="Guardar Cambios" class="btn btn-primary">
            <a href="index.php" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>

