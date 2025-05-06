<?php
    session_start();
    $rol=$_SESSION['rol']??'usuario';
    if($rol==='admin'){
      include 'headeradmin.php';
    }
    else{
      include 'header.php';
    }
?>