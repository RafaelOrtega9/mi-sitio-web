<?php 
include("verses.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/art.css">
    <link rel="stylesheet" href="../CSS/inicio.css">
    <link rel="stylesheet" href="../CSS/add.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <title>Coffe House</title>
</head>
<body>
<?php include('./sidemenu.php')?>
<div class="te">
    <div class="te-cont">
    <?php
    include("conexion.php");
    ?>
    <div class="euser">
    <table border="1">
    <tr>
        <td>Id</td>
        <td>Nombre</td>
        <td>Email</td>
        <td>Usuario</td>
        <td>Contraseña</td>
        <td>Rol</td>
        <td>Editar</td>
        <td>Eliminar</td>
    </tr>
    <?php
    $sql= "select * from datos";
    $res=mysqli_query($conn,$sql);
    while($mostrar=mysqli_fetch_array($res)){
    ?>
    <tr data-id="<?php echo $mostrar['id']; ?>">
        <td><?php echo $mostrar['id']; ?></td>
        <td class="editable"><?php echo $mostrar['nombre']; ?></td>
        <td class="editable"><?php echo $mostrar['email'] ?></td>
        <td class="editable"><?php echo $mostrar['user'] ?></td>
        <td class="editable"><?php echo $mostrar['pass'] ?></td>
        <td class="editable"><?php echo $mostrar['rol'] ?></td>
        <td class="lg editar-btn"><i class="ri-pencil-fill" style="cursor:pointer;"></i></td>
        <td class="lg guardar-btn" style="display:none;"><i class="ri-save-fill" style="cursor:pointer;"></i></td>
        <td>
        <form action="delete.php" method="post">
        <input type="hidden" name="id" value="<?php echo $mostrar['id']; ?>">
            <button type="submit" name="delt">
                    <i class="ri-user-forbid-fill"></i>
            </button>
        </form>
        </td>
    </tr>
    <?php } ?>
    </table>
    </div>
    </div>
</div>
    <script src="../js/script2.js"></script>
    <script src="../js/script4.js"></script>
</body>
</html>