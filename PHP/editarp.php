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
    <table border="1">
    <tr>
        <td>Id</td>
        <td>Titulo</td>
        <td>Precio</td>
        <td>Imagen</td>
        <td>Categoria</td>
        <td>Editar</td>
    </tr>
    <?php
    $sql= "select * from productos";
    $res=mysqli_query($conn,$sql);
    while($mostrar=mysqli_fetch_array($res)){
    ?>
    <tr data-id="<?php echo $mostrar['id']; ?>">
        <td class="editable"><?php echo $mostrar['id']; ?></td>
        <td class="editable"><?php echo $mostrar['titulo'] ?></td>
        <td class="editable"><?php echo $mostrar['precio'] ?></td>
        <td class="editable"><?php echo $mostrar['imagen'] ?></td>
        <td class="editable"><?php echo $mostrar['categoria'] ?></td>
        <td class="log editar-btun"><i class="ri-pencil-fill" style="cursor:pointer;"></i></td>
        <td class="log guardar-btun" style="display:none;"><i class="ri-save-fill" style="cursor:pointer;"></i></td>
    </tr>
    <?php } ?>
    </table>
    </div>
</div>
    <script src="../js/script2.js"></script>
    <script src="../js/script4.js"></script>
</body>
</html>