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
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <title>Coffe House</title>
</head>
<body>
<section class="shop">
        <h1 class="section-title">DESAYUNOS</h1>
        <div class="product-content">
        <?php
        include("conexion.php");
        $consulta = "SELECT * FROM productos WHERE categoria = 'desayunos'";
        $resultado = $conn->query($consulta);
        while($fila = $resultado->fetch_assoc()) {
        echo '
        <div class="product-box">
            <div class="img-box">
                <img src="' . $fila['imagen'] . '" alt="">
            </div>
            <h2 class="product-title">' . $fila['titulo'] . '</h2>
            <div class="price-and-cart">
                <span class="price">$' . number_format($fila['precio'], 2) . '</span>
                <i class="ri-shopping-cart-line add-cart"></i>
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