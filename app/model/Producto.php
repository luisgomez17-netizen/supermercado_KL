<?php
class Producto {
    private $conexion;

    public function __construct($db) {
        $this->conexion = $db;
    }

    // Obtener todos los productos para la tabla
    public function obtenerTodos() {
        $sql = "SELECT * FROM productos ORDER BY id DESC";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function guardar($nombre, $categoria_id, $precio, $stock, $unidad_medida, $fecha_vencimiento) {
        $sql = "INSERT INTO productos (nombre, categoria_id, precio, stock, unidad_medida, fecha_vencimiento) 
                VALUES (:nombre, :categoria_id, :precio, :stock, :unidad_medida, :fecha_vencimiento)";
        
        $stmt = $this->conexion->prepare($sql);
        
        $stmt->bindValue(":nombre", $nombre, PDO::PARAM_STR);
        $stmt->bindValue(":categoria_id", $categoria_id, PDO::PARAM_INT);
        $stmt->bindValue(":precio", $precio);
        $stmt->bindValue(":stock", $stock, PDO::PARAM_INT);
        $stmt->bindValue(":unidad_medida", $unidad_medida, PDO::PARAM_STR);
        $stmt->bindValue(":fecha_vencimiento", $fecha_vencimiento, PDO::PARAM_STR);
        
        return $stmt->execute();
    }
}