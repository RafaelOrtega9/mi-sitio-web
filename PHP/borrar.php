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
<?php include('./sidemenu.php')?>
<section class="shop">
        <div class="tfli">
            <h1>Filtrar</h1>
            <a class="menu-toggle"><i class="ri-filter-3-line"></i></a>
            <ul class="menu-drop">
                <form action="fl.php" method="post">
                    <li><input type="submit" value="Bebidas" name="bebidas"></li>
                    <li><input type="submit" value="Postres" name="postres"></li>
                    <li><input type="submit" value="Desayunos" name="desayunos"></li>
                    <li><input type="submit" value="Almuerzos" name="almuerzos"></li>
                    <li><input type="submit" value="Todo" name="todo"></li>
                </form>
            </ul>
        </div>
        <div class="product-edit">
        <?php
        include("conexion.php");
        $ct=isset($_GET['categoria']) ? $_GET['categoria']: '';
        if ($ct=="todo" || $ct=="") {
            $consulta = "SELECT * FROM productos";
        }
        else{
            $consulta = "SELECT * FROM productos where categoria='$ct'";
        }
        $resultado =$conn->query($consulta);
        while($fila=$resultado->fetch_assoc()) {
        echo '
        <div class="product-box">
            <div class="img-box">
                <img src="' . $fila['imagen'] . '" alt="">  
            </div>
            <div class="end">
            <div class="ol">
            <h2 class="product-title">' . $fila['titulo'] . '</h2></div>
                <form action="pr.php" method="post">
                <input type="hidden" name="id" value="'. $fila['id'] .'">
                <button type="submit">
                    <div class="price-and-cart">
                        <div class="borrar">
                        <span>Eliminar producto</span>
                        <i class="ri-delete-bin-6-line"></i>
                        </div>
                    </div>
                </button>
                </form>
            </div>
        </div>';
        }
        ?>
        </div>
    </section>
    <script src="../js/script2.js"></script>
    <script src="../js/script4.js"></script>
</body>
</html>