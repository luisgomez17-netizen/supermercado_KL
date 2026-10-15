<h1>Listado Producto</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Categoria id</th>
        <th>Precio</th>
        <th>stock</th>
        <th>Unidad Medida</th>
        <th>Fecha Vencimiento</th>
        <th></th>

    </tr>
    <?php if (!empty($productos)): ?>
        <?php foreach ($productos as $p): ?>
            <tr>
                <td><?= $p['id']; ?></td>
                <td><?= htmlspecialchars($p['nombre']); ?></td>
                <td><?= htmlspecialchars($p['categoria_id']); ?></td>
                <td><?= $p['precio']; ?></td>
                <td><?= htmlspecialchars($p['stock']); ?></td>
                <td><?= htmlspecialchars($p['unidad_medida']); ?></td>
                <td><?= htmlspecialchars($p['fecha_vencimiento']); ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>

<br>
<a href="/supermercado_KL/public/index.php?action=crear">Crear Nuevo Producto</a>