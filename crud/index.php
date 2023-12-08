<?php
require_once 'config/db.php'; // Incluye la configuración y conexión a la base de datos
require_once 'controllers/EstudiantesController.php';



$controller = new EstudiantesController();

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'listar';
}

switch ($action) {
    case 'listar':
        $controller->listar();
        break;
    case 'agregar':
        $controller->agregar();
        break;
    case 'editar':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $controller->editar($id);
        } else {
            // Redireccionar a la lista si no se proporciona un ID válido
            header('Location: index.php');
        }
        break;
    case 'guardar':
        $controller->guardar($_POST);
        break;
    case 'eliminar':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $controller->eliminar($id);
        }
        break;
    default:
        // Redireccionar a la lista si la acción no es válida
        header('Location: index.php');
        break;
}
?>
