<?php
    include("conexion.php");
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mesage=$_POST['mesage'];
    $contact="insert into contactos(nombre,correo,mensaje)
    values('$name','$email','$mesage');";
    $validacion=mysqli_query($conn,$contact);
    header("location: ./inicio.php");
?>