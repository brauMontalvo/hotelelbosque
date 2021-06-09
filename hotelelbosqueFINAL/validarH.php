<?php
session_start();
$_SESSION ['email'] = $_POST['correo'];
$_SESSION ['contra'] = $_POST['contra'];

require 'coneccion.php';
$Query = "select email, contrasena, nombre, id_huesped from huesped WHERE email = '".$_SESSION ['email']."' AND contrasena = '" .$_SESSION ['contra'] ."';";
$Result = $mysql->query( $Query );
$row =$Result->fetch_array();

$_SESSION ['nom'] = $row["nombre"];
$_SESSION ['hue'] = $row["id_huesped"];

if(($_SESSION ['email'] == $row["email"] && $_SESSION ['contra'] == $row["contrasena"])) 
{ 
  header("Location: inicio.php");

}else{
  header("Location: hlog.php");
  echo "<script>alert('Usuario y/o password incorrectos');</script>";
  session_destroy();
}

?>  