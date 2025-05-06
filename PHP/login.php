<?php
    session_start();
    include("conexion.php");
    $emaile=$_POST['emaile'];
    $password=$_POST['password'];
    $password=hash('sha512', $password);
    $login="select * from datos where email='$emaile' and pass='$password'";
    $validacion=mysqli_query($conn,$login);
    if(mysqli_num_rows($validacion)>0){

        $row = mysqli_fetch_assoc($validacion);

        $_SESSION['usuario']=$emaile;
        $_SESSION['id_usuario'] = $row['id'];
        $_SESSION['usuario'] = $row['user'];
        $_SESSION['nombrec'] = $row['nombre'];
        $_SESSION['rol']=$row['rol'];
        header("location:./inicio.php");
        exit;
    }
    else{
    echo'
        <script>
            alert("El Usuario no existe verifique los datos");
            window.location="sesion.php";
        </script>
    ';
    exit;
    }
?>