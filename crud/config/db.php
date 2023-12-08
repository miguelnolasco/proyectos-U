<?php

// Configuración de la base de datos
define('DB_HOST', 'localhost');
define('DB_NAME', 'estudiantes');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

// Conexión a la base de datos
try {
    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

?>
