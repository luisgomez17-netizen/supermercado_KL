<?php
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../model/Producto.php';

class ProductoController {
    private $db;
    private $productoModel;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->productoModel = new Producto($this->db);
    }

    public function index() {
        $productos = $this->productoModel->obtenerTodos();
        require_once __DIR__ . '/../view/producto/index.php';
    }

    public function crear() {
        require_once __DIR__ . '/../view/producto/crear.php';
    }

    public function guardar() {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nombre = trim($_POST["nombre"]);
        $categoria_id = $_POST["categoria_id"];
        $precio = $_POST["precio"];
        $stock = $_POST["stock"];
        $unidad_medida = trim($_POST["unidad_medida"]);
        $fecha_vencimiento = !empty($_POST["fecha_vencimiento"]) ? $_POST["fecha_vencimiento"] : null;

        $this->productoModel->guardar($nombre, $categoria_id, $precio, $stock, $unidad_medida, $fecha_vencimiento);

        header("Location: index.php");
        exit();
        }
    }
}
    
