<?php
require_once __DIR__ . '/../app/controller/ProductoController.php';

$controller = new ProductoController();

// Capturamos la acción de forma segura (por defecto 'index')
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($action) {
    case 'crear':
        $controller->crear();
        break;
    case 'guardar':
        $controller->guardar();
        break;
    case 'index':
    default:
        $controller->index();
        break;
}