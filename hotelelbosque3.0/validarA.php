<?php

$email = $_POST["correo"];
$contraseña = $_POST['contraseña'];

require 'coneccion.php';
$Query = "select email, contraseña from administrador WHERE email = '".$email."' AND contraseña = '" .$contraseña ."';";
$Result = $mysql->query( $Query );
$row =$Result->fetch_array();

if( ($email = $row["email"] && $contraseña = $row["contraseña"])  ) 
{ 
  header("Location: inicioAdm.php");
}else{
  header("Location: alog.php");
  echo "<script>alert('Usuario y/o contraseña incorrectos');</script>";
}



?>  