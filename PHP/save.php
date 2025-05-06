<?php
    $id=$_POST['iden'];
    $titulo=$_POST['title'];
    $precio=$_POST['price'];
    $imagen=$_POST['image'];
    $categoria=$_POST['categ'];

    INCLUDE('conexion.php');
    $save="update productos set titulo='$titulo', precio='$precio', imagen='$imagen', categoria='$categoria' where id='$id' ";
    $sql=mysqli_query($conn,$save);
    header('location:./mod.php');
    die();
?>