<?php
include("conexion.php");
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $imagen=$_FILES['imagen'];
    $categoria = $_POST['categoria'];
    $nombre_imagen="";
    if(isset($_FILES['imagen'])){
        $archivo=$_FILES['imagen'];
        $nombre_archivo=basename($archivo['name']);
        $temporal=$archivo['tmp_name'];
        $carpeta_destino='../img/';
        if(!file_exists($carpeta_destino)){
        mkdir($carpeta_destino, 0777, true);
        }
        $ruta_final=$carpeta_destino.$nombre_archivo;
        if(move_uploaded_file($temporal,$ruta_final)){
            echo"Imagen subida correctamente a $ruta_final<br>";
            $nombre_imagen=$ruta_final;
        }else{
            echo"Error al subir la imagen.";
        }
    }
    echo"$nombre, $precio, $categoria, $nombre_imagen";
    $sql="INSERT INTO productos (titulo, precio, categoria, imagen, descripcion) 
    VALUES ('$nombre', '$precio', '$categoria', '$nombre_imagen','$descripcion')";
    $resultado = mysqli_query($conn, $sql);
    if ($resultado) {
        header('Location: producto.php');
        exit();
    } else {
        die("Error al guardar en la base de datos: " . mysqli_error($conn));
    }
?>