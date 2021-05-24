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
<body>

<?php 

require 'coneccion.php';
$Query = "update empleado set nombre = '".$_POST["Nombre"]."', edad = ".$_POST["Edad"]." , sexo = '".$_POST["Sexo"]."', seccion = '". $_POST['Seccion']."', cargo = '".$_POST['Cargo'] ."' WHERE id_empleado=".$_GET["id"].";";
$Result = $mysql->query( $Query );

if($Result!=null){
   	print("<h1> Se actualizo con éxito el registro. </h1>");
    print("<CENTER> <form action='visualizarEmp.php'> <input type=submit value='Regresar'> </form> </CENTER>"); }
else
  	print("<h1> No se pudo actualizar </h1>");

	
?>





<?php  include 'footer.php'; ?>
</body>
</html>