<!DOCTYPE html>
<html id="admin">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Hotel El Bosque">
    <meta name="keywords" content="hotel">
    <meta http‐equiv="refresh" content="20;URL=./2PantillaBasica.htm" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloEquBlog.css" media="all">
</head>

<?php

    require 'coneccion.php';
    $Query = "select max(id_empleado) as maximo from empleado;";
    $Result = $mysql->query( $Query );
    $row =$Result->fetch_array();
    $idMax = 0;	  
    $idMax = $row["maximo"];

    require 'coneccion.php';
    $Query = "insert into empleado values (". ($idMax + 1) .", '".$_POST["nombre"]."', ".$_POST["edad"].", '".$_POST["sexo"]."', '".$_POST["seccion"]."', '".$_POST["cargo"]."');";
    $Result = $mysql->query( $Query );

    if($Result!=null){
?>
<body>
<center><form action="inicioAdm.php">
    <h1> Registrado correctamente! </h1>
    <input type="submit" value="Volver al inicio">
</form></center><br> 
</body>

<?php }
else {?>

<body>
<center><form action="registrarEmp.php">
  	 <h1> Ocurrio un error en la base de datos </h1>
    <input type="submit" value="Intentarlo de nuevo">
    </form></center><br> 
</body>
<?php } ?>  
