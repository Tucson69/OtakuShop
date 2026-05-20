<form action="Controlador/saveinfo.php" method="POST" enctype="multipart/form-data">

    Nombre:
    <input type="text" name="nameProduct" required><br>

    Descripción:
    <input type="text" name="description" required><br>

    Imagen:
    <input type="file" name="image" accept="image/*" required><br>

    Precio:
    <input type="number" step="0.01" name="price" required><br>

    <button>Guardar</button>
</form>