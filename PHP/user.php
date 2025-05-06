<?php
session_start();
include('../PHP/conexion.php');
if (!isset($_SESSION['id_usuario'])) {
    echo "No has iniciado sesión.";
    exit;
}
$id = $_SESSION['id_usuario'];

$cons = "SELECT email,user,nombre FROM datos WHERE id='$id'";
$reai = mysqli_query($conn, $cons);
if ($row = mysqli_fetch_assoc($reai)) {
    $email = $row['email'];
    $usero = $row['user'];
    $nom = $row['nombre'];

} else {
    $email = "No encontrado";
    $usero = "No encontrado";
    $nom = "No encontrado";
}
$rol=$_SESSION['rol']??'usuario';
if($rol==='admin'){
  include 'headeradmin.php';
}
else{
  include 'header.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffe House</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/inicio.css">
    <link rel="stylesheet" href="../CSS/art.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
<section class="conf">
    <h1>PERFIL</h1>
    <div class="conf-op">
        <p>Usuario: <?php echo ($usero); ?></p>
    </div>    
    <div class="conf-op">
        <p>Nombre: <?php echo ($nom); ?></p>
    </div>    
    <div class="conf-op">
        <p>Email: <?php echo ($email); ?></p>
    </div>
    <div class="conf-op">
        <p>Rol Actual: <?php echo $_SESSION['rol'];?> </p>
    </div>
    <div class="conf-op">
        <p>Contraseña: ********* </p>
    </div>
    <div>
    <center>
    <div class="pa">
        <div class="pe">
            <a href="./close_login.php">Cerrar Sesion</a>
        </div>
    </div>
    </center>
    </div>
</section>
<script src="../js/script2.js"></script>
<script src="../js/script3.js"></script>
</body>
</html>
