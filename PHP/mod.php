<?php 
include("verses.php");
?>
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
<div class="te">
    <div class="te-cont">
    <?php
    include("conexion.php");
    ?>
    <table border="1">
        <div class="back">
            <a href="./editarp.php">
                <i class="ri-arrow-left-box-fill"></i>
            </a>
        </div>
    <tr>
        <td>Id</td>
        <td>Titulo</td>
        <td>Precio</td>
        <td>Imagen</td>
        <td>Categoria</td>
        <td>EDITAR</td>
        <td>Guardar</td>
    </tr>
    <?php
    $sql= "select * from productos";
    $res=mysqli_query($conn,$sql);
    while($mostrar=mysqli_fetch_array($res)){
    ?>
    <tr>
        <form action="save.php" method="post">
        <td><input type="text" name="iden" value="<?php echo $mostrar['id'] ?>"></td>
        <td><input type="text" name="title" value="<?php echo $mostrar['titulo'] ?>"></td>
        <td><input type="text" name="price" value="<?php echo $mostrar['precio'] ?>"></td>
        <td><input type="text" name="image" value="<?php echo $mostrar['imagen'] ?>"></td>
        <td><input type="text" name="categ" value="<?php echo $mostrar['categoria'] ?>"></td>
        <td class="lg"><a href="./mod.php"><i class="ri-pencil-fill"></i></a></td>
        <td class="lg"><button type="submit" name="guardar"><i class="ri-save-fill"></i></td></button>
        </form>
    </tr>
    <?php } ?>
    </table>
    </div>
</div>
    <script src="../js/script2.js"></script>
    <script src="../js/script4.js"></script>
</body>
</html>