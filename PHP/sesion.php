<?php
    session_start();
    if(isset($_SESSION['usuario'])){
        header("location: ./inicio.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>
    <link rel="stylesheet" href="../CSS/sesion.css">
    <link rel="stylesheet" href="">
</head>
<body>
    <main>

        <div class="contenedor_todo">
            <div class="caja_trasera">
                <div class="caja_trasera_login">
                    <h3>Ya tienes una cuenta?</h3>
                    <p>Haz click para iniciar sesion</p>
                    <button id="btn-iniciar-sesion">Iniciar Sesion</button>
                </div>
                <div class="caja_trasera_register">
                    <h3>Aún no tienes una cuenta?</h3>
                    <p>Registrate para Iniciar Sesión</p>
                    <button id="btn-registrarse">Registrarse</button>
                </div>
            </div>
            <div class="contenedor_login-register">
                <form action="login.php" action="user.php" method="post" class="formulario_login">
                    <h2>Iniciar Sesion</h2>
                    <input required type="text" name="emaile" placeholder="Correo Electronico">
                    <input required type="password" name="password" placeholder="Contraseña">
                    <button>Entrar</button>
                </form>

                <form action="registrouser.php" method="post" class="formulario_register">
                    <h2>Registrarse</h2>
                    <input required type="text" name="nombre" placeholder="Nombre Completo">
                    <input required type="text" name="emaile" placeholder="Correo Electronico">
                    <input required type="text" name="usero" placeholder="Usuario">
                    <input required type="password" name="password" placeholder="Contraseña">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="../js/script.js"></script>
</body>
</html>