<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="Hotel El Bosque">
    <meta name="keywords" content="hotel">
    <meta http‐equiv="refresh" content="20;URL=./2PantillaBasica.htm" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloEquBlog.css?1.0" media="all">
</head>


<?php

if($_POST["contraseña"] == $_POST["contraseña2"]){

require 'coneccion.php';
$Query = "select max(id_huesped) as maximo from huesped;";
$Result = $mysql->query( $Query );
$row =$Result->fetch_array();
$idMax = 0;	  
$idMax = $row["maximo"];


require 'coneccion.php';
$Query = "insert into huesped values (". ($idMax + 1) .", '".$_POST["nombre"]."', ".$_POST["edad"].", '".$_POST["sexo"]."', '".$_POST["email"]."', '".$_POST["telefono"]."', '".$_POST["ciudad"]."', '".$_POST["contraseña"]."', '".$_POST["apellidos"]."');";
$Result = $mysql->query( $Query );


if($Result!=null) { ?>

<body>
<center><form action="hlog.php">
    <h1> Registrado correctamente! </h1>
    <input type="submit" value="Iniciar sesi&oacute;n">
</form></center><br> 
</body>

<?php }
else {?>

<body>
<center><form action="registrarH.php">
  	 <h1> Ocurrio un error en la base de datos </h1>
    <input type="submit" value="Intentarlo de nuevo">
    </form></center><br> 
</body>

<?php } 
}

else {
header("Location: registrarH.php");
echo "<script> window.onload = function() { alert('Las contraseñas no coinciden'); } </script>"; }

?>  
</html>