<?php
include("conexion.php");

$sql = "SELECT * FROM productos";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    while($row = $resultado->fetch_assoc()) {
        echo '
        <div class="product-box">
            <div class="img-box">
                <img src="' . $row["imagen"] . '" alt="">
            </div>
            <h2 class="product-title">' . $row["titulo"] . '</h2>
            <div class="price-and-cart">
                <span class="price">$' . $row["precio"] . '</span>
                <i class="ri-shopping-cart-line add-cart"></i>
            </div>
        </div>
        ';
    }
} else {
    echo "<p>No hay productos disponibles</p>";
}

$conn->close();
?>
