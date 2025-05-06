<?php
    $delt=$_POST['delt'];
    $id=$_POST['id'];
    include('conexion.php');
    $sql="delete from datos where id='$id'";
    if(mysqli_query($conn,$sql)){
        header('location:./eusuario.php');
        exit();
    }else{
        echo'ERROR';
    }
?>