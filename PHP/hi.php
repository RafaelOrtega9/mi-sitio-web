<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/add.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/add.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <title>Document</title>
</head>
<body>
<button onclick="mostrarContenedor()">Mostrar Contenedor</button>
    <div class="contenedor_centro">
    <div class="agregar_p">
    <h2>Agregar Producto</h2> 
    <button class="cerrar" onclick="ocultarContenedor()">X</button>
    <form action="hiac.php" method="post" enctype="multipart/form-data">
        <label for="nombre">Ingrese el nombre del producto:</label><br>
        <input type="text" name="nombre" required><br>
        <label for="precio">Precio:</label><br>
        <input type="number" step="0.01" name="precio" required><br>
        <label for="descripcion">Descripcion:</label><br>
        <input type="text" name="descripcion" required><br>
        <label for="categoria">Categoria:</label><br>
        <input type="radio" name="categoria" value="bebidas" required> Bebidas<br>
        <input type="radio" name="categoria" value="postres" required> Postres<br>
        <input type="radio" name="categoria" value="desayunos" required> Desayunos<br>
        <input type="radio" name="categoria" value="almuerzos" required> Almuerzos<br>
        <label for="imagen">Imagen:</label><br>
        <input type="file" name="imagen" accept="image/*"><br>
        <button>Guardar</button><br>
    </form>
    </div>
    </div>

    <script src="../js/ja.js"></script>
</body>
</html>                 
</body>
</html>