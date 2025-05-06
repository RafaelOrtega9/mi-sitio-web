<?php
include("conexion.php");
$id = $_POST['id'];
$titulo = $_POST['titulo'];
$precio = $_POST['precio'];
$imagen = $_POST['imagen'];
$categoria = $_POST['categoria'];

$sql = "UPDATE datos SET titulo='$titulo', precio='$precio', imagen='$imagen', categoria='$categoria' WHERE id=$id";
$eject=mysqli_query($conn, $sql);
?>