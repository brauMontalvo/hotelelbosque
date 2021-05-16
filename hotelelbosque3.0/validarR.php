<?php

$email = $_POST["correo"];
$contraseña = $_POST['contraseña'];

require 'coneccion.php';
$Query = "select email, contraseña from recepcionista WHERE email = '".$email."' AND contraseña = '" .$contraseña ."';";
$Result = $mysql->query( $Query );
$row =$Result->fetch_array();

if( ($email = $row["email"] && $contraseña = $row["contraseña"])  ) 
{ 
  header("Location: inicioRec.php");
}else{
  header("Location: rlog.php");
  echo "<script>alert('Usuario y/o contraseña incorrectos');</script>";
}



?>  