<h1>Crear Nuevo Producto</h1>

<form action="index.php?action=guardar" method="POST">
    <label>Nombre:</label><br>
    <input type="text" name="nombre" required><br><br>

    <label>Categoría ID:</label><br>
    <input type="number" name="categoria_id" required><br><br>

    <label>Precio:</label><br>
    <input type="number" step="0.01" name="precio" required><br><br>

    <label>Stock:</label><br>
    <input type="number" name="stock" required><br><br>

    <label>Unidad de Medida:</label><br>
    <input type="text" name="unidad_medida" placeholder="ej. unidad, kilo" required><br><br>

    <label>Fecha de Vencimiento:</label><br>
    <input type="date" name="fecha_vencimiento"><br><br>

    <button type="submit">Guardar</button>
</form>

<br>
<a href="index.php">Volver al Listado</a>