<?php

$email = $_POST["correo"];
$contraseña = $_POST['contraseña'];

require 'coneccion.php';
$Query = "select email, contraseña from huesped WHERE email = '".$email."' AND contraseña = '" .$contraseña ."';";
$Result = $mysql->query( $Query );
$row =$Result->fetch_array();

if( ($email = $row["email"] && $contraseña = $row["contraseña"])  ) 
{ 
  header("Location: inicio.php");
}else{
  header("Location: hlog.php");
  echo "<script>alert('Usuario y/o contraseña incorrectos');</script>";
  
}

?>  