<?php
    $bebidas=$_POST['bebidas'];
    $postres=$_POST['postres'];
    $desayunos=$_POST['desayunos'];
    $almuerzos=$_POST['almuerzos'];
    $todo=$_POST['todo'];
    if (isset($bebidas)) {
        header("location: ./borrar.php? categoria=bebidas");
        exit();
    }
    if (isset($postres)) {
        header("location: ./borrar.php? categoria=postres");
        exit();
    }
    if (isset($desayunos)) {
        header("location: ./borrar.php? categoria=desayunos");
        exit();
    }
    if (isset($almuerzos)) {
        header("location: ./borrar.php? categoria=almuerzos");
        exit();
    }
    if (isset($todo)) {
        header("location: ./borrar.php? categoria=todo");
        exit();
    }
?>