<?php
require_once 'models/EstudianteModel.php';

class EstudiantesController {
    private $model;

    public function __construct() {
        $this->model = new EstudianteModel();
    }

    public function listar() {
        // Obtener y mostrar la lista de estudiantes
        $estudiantes = $this->model->obtenerEstudiantes();
    
        include 'views/header.php';
        include 'views/estudiantes/listar.php';
        include 'views/footer.php';
    }
    
    

    public function agregar() {
        // Si se envió el formulario para agregar estudiante, guardar los datos en la base de datos
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = array(
                'nombre_completo' => $_POST['nombre_completo'],
                'carrera' => $_POST['carrera'],
                'ciclo_actual' => $_POST['ciclo_actual'],
                'edad' => $_POST['edad'],
                'direccion' => $_POST['direccion']
            );
    
            $this->model->agregarEstudiante($data);
    
            // Redirigir a la lista después de guardar
            header('Location: index.php');
            exit();
        } else {
            // Mostrar el formulario para agregar estudiante
            include 'views/header.php';
            include 'views/estudiantes/agregar.php';
            include 'views/footer.php';
        }
    }
    

    public function editar($id) {
        // Si se envió el formulario para editar estudiante, actualizar los datos en la base de datos
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = array(
                'nombre_completo' => $_POST['nombre_completo'],
                'carrera' => $_POST['carrera'],
                'ciclo_actual' => $_POST['ciclo_actual'],
                'edad' => $_POST['edad'],
                'direccion' => $_POST['direccion']
            );

            $this->model->editarEstudiante($id, $data);

            // Redirigir a la lista después de guardar
            header('Location: index.php');
            exit();
        } else {
            // Obtener los datos del estudiante desde el modelo
            $estudiante = $this->model->obtenerEstudiantePorId($id);

            // Mostrar el formulario de edición con los datos del estudiante seleccionado
            include 'views/header.php';
            include 'views/estudiantes/editar.php';
            include 'views/footer.php';
        }
    }
    public function guardar($data) {
        // Verificar si los datos enviados no están vacíos
        if (empty($data['nombre_completo']) || empty($data['carrera']) || empty($data['ciclo_actual']) || empty($data['edad']) || empty($data['direccion'])) {
            // Si faltan datos, redirigir a la página de agregar con un mensaje de error
            header('Location: index.php?action=agregar&error=missing_data');
            exit();
        }
    
        // Llamar al modelo para agregar el estudiante a la base de datos
        $result = $this->model->agregarEstudiante($data);
    
        if ($result) {
            // Si se insertó correctamente, redirigir a la lista después de guardar
            header('Location: index.php');
        } else {
            // Si hubo un error al guardar, redirigir a la página de agregar con un mensaje de error
            header('Location: index.php?action=agregar&error=database_error');
        }
        exit();
    }
    
    
    public function eliminar($id) {
        // Eliminar el estudiante con el ID proporcionado desde el modelo
        $this->model->eliminarEstudiante($id);

        // Redirigir a la lista después de eliminar
        header('Location: index.php');
        exit();
    }
}
?>
