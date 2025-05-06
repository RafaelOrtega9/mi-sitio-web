<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

include("conexion.php");
$consulta = "SELECT * FROM productos WHERE categoria = 'bebidas'";
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
        <p>' .$fila['id']. '</p>
<form action="pr.php" method="post">
    <input type="hidden" name="id" value="' . $fila['id'] . '">
    <input type="submit" name="click" value="🗑️">
</form>
    </div>
</div>';
}
?>

</body>
</html>