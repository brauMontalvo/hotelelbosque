<?php
$email = $_POST["correo"];
$contra = $_POST['contra'];

require 'coneccion.php';
$Query = "select email, contrasena from recepcionista WHERE email = '".$email."' AND contrasena = '" .$contra."';";
$Result = $mysql->query( $Query );
$row =$Result->fetch_array();

if( ($email == $row["email"] && $contra == $row["contrasena"])  ) 
{ 
  header("Location: inicioRec.php");
}else{
  header("Location: rlog.php");
  echo "<script>alert('Usuario y/o contrase単a incorrectos');</script>";
}
?>  