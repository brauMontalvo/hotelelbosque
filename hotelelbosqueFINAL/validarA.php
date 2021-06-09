<?php
$email = $_POST["correo"];
$contra = $_POST['contra'];

require 'coneccion.php';
$Query = "select email, contrasena from administrador WHERE email = '".$email."' AND contrasena = '" .$contra."';";
$Result = $mysql->query( $Query );
$row =$Result->fetch_array();

if( ($email == $row["email"] && $contra == $row["contrasena"])  ) 
{ 
  header("Location: inicioAdm.php");
}else{
  header("Location: alog.php");
  echo "<script>alert('Usuario y/o contraseña incorrectos');</script>";
}
?>  