<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/art.css">
    <link rel="stylesheet" href="../CSS/inicio.css">
    <link rel="stylesheet" href="../CSS/add.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <title>Coffe House</title>
</head>
<body>
<?php require('./headeradmin.php')?>
<?php include('./admin.php')?>
<div class="contenedor_centro">
    <div class="agregar_p">
    <h2>Añadir Producto</h2><br>
    <button class="cerrar" onclick="ocultarContenedor()"><i class="ri-close-large-fill"></i></button>
    <form action="hiac.php" method="post" enctype="multipart/form-data">
        <label for="nombre">Ingrese el nombre del producto:</label><br>
        <input type="text" name="nombre" required><br><br>
        <label for="precio">Precio:</label><br>
        <input type="number" step="0.01" name="precio" required><br><br>
        <label for="descripcion">Descripcion:</label><br>
        <input type="text" name="descripcion" required><br><br>
        <label for="categoria">Categoria:</label><br><br>
        <select name="categoria" id="categoria" required>
            <option value="">-- Selecciona una categoría --</option>
            <option value="bebidas">Bebidas</option>
            <option value="postres">Postres</option>
            <option value="desayunos">Desayunos</option>
            <option value="almuerzos">Almuerzos</option>
        </select><br><br>
        <label for="imagen">Imagen:</label><br>
        <input type="file" name="imagen" accept="image/*"><br><br>
        <div class="gd">
            <button>Guardar</button><br>
        </div>
    </form>
    </div>
</div>
    <script src="../js/script2.js"></script>
    <script src="../js/script4.js"></script>
</body>
</html>