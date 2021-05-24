<?php
session_start();
$_SESSION ['email'] = $_POST['correo'];
$_SESSION ['contra'] = $_POST['contraseña'];

require 'coneccion.php';
$Query = "select email, contraseña, nombre from huesped WHERE email = '".$_SESSION ['email']."' AND contraseña = '" .$_SESSION ['contra'] ."';";
$Result = $mysql->query( $Query );
$row =$Result->fetch_array();

$_SESSION ['nom'] = $row["nombre"];

if( ($_SESSION ['email'] == $row["email"] && $_SESSION ['contra'] == $row["contraseña"])  ) 
{ 
  header("Location: inicio.php");

}else{
  header("Location: hlog.php");
  echo "<script>alert('Usuario y/o contraseña incorrectos');</script>";
  session_destroy();
}

?>  