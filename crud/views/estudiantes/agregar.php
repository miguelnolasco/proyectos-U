<div class="container mt-4">
    <h2>Agregar Estudiante</h2>
    <form action="index.php?action=agregar" method="post">
        <!-- Campos del formulario para ingresar datos del estudiante -->
        <div class="mb-3">
            <label for="nombre_completo" class="form-label">Nombre Completo:</label>
            <input type="text" name="nombre_completo" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="carrera" class="form-label">Carrera:</label>
            <input type="text" name="carrera" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="ciclo_actual" class="form-label">Ciclo Actual:</label>
            <input type="text" name="ciclo_actual" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="edad" class="form-label">Edad:</label>
            <input type="number" name="edad" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección:</label>
            <input type="text" name="direccion" class="form-control" required>
        </div>

        <!-- Botones de guardar y cancelar -->
        <div class="mb-3">
            <input type="submit" value="Guardar" class="btn btn-primary">
            <a href="index.php" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
