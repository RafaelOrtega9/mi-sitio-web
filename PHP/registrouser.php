<?php

    include("conexion.php");

    $nombre=$_POST['nombre'];
    $emaile=$_POST['emaile'];
    $usero=$_POST['usero'];
    $password=$_POST['password'];
    
    $password= hash('sha512',$password);

    $insertar="insert into datos(nombre,email,user,pass)
    values('$nombre','$emaile','$usero','$password')";

    $consulta="select * from datos where email ='$emaile' ";
    $verificar=mysqli_query($conn,$consulta);

    if(mysqli_num_rows($verificar) > 0){
        echo'
            <script>
                alert("Este correo ya esta registrado , intenta con otro correo");
                window.location="sesion.php";
            </script>
        ';
        exit();
    }
    $conuser="select * from datos where user ='$usero' ";
    $verificar_user=mysqli_query($conn,$conuser);

    if(mysqli_num_rows($verificar_user) > 0){
        echo'
            <script>
                alert("Este Usuario ya esta registrado , intenta con otro nombre");
                window.location="sesion.php";
            </script>
        ';
        exit();
    }
    $ejecutar=mysqli_query($conn,$insertar);

    if($ejecutar){
        echo"
        <script>
            alert('Usuario almacenado correcatmente');
            window.location='sesion.php';
        </script>
        ";
    }
    else{
        echo"
        <script>
            alert('Usuario no almacenado, Intentalo de nuevo');
            window.location='sesion.php';
        </script>
        ";
    }
    mysqli_close($conn);
?>