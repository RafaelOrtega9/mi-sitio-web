<?php
include("conexion.php");
    $id=$_POST['id'];
    if (isset($id)) {
        $del="delete from productos where id='$id'";
        $res = mysqli_query($conn, $del);
        header("location: ./borrar.php");
        exit();
    }
?>