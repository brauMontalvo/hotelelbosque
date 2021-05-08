<?php
    if(!empty($_POST['usuario']) && !empty($_POST['contraseña'])){
      $usuario = $_POST['usuario'];
      $contraseña = $_POST['contraseña'];
      if($usuario == "US01" && $contraseña == "12345"){
        header("Location: inicio.php");
      }else{
        echo "<h1 class='bad'>Usuario y/o contraseña incorrectos<h1>";
      }
      if($usuario == "US02" && $contraseña == "67890"){
        header("Location: inicio.php");
      }else{
        echo "<h1 class='bad'>Usuario y/o contraseña incorrectos<h1>";
      }
    }else{
      header("Location: index.php");
      echo "<h1 class='bad'>Los datos son incorrectos<h1>";
    }
?>  