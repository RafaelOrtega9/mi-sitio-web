<?php
include("conexion.php");
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$rol = $_POST['rol'];
$sql = "UPDATE datos SET nombre='$nombre', email='$email', user='$user', pass='$pass', rol='$rol' WHERE id=$id";
$eject=mysqli_query($conn, $sql);
?>