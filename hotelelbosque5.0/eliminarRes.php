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
$Query = "delete from reservacion WHERE id_reservacion=".$_GET["id2"].";";
$Result = $mysql->query( $Query );

if($Result!=null){
    require 'coneccion.php';
     session_start();
     $Query = "update habitacion set estado = 'Libre' where id_habitacion = ".$_SESSION['hab'].";";
     $Result = $mysql->query( $Query ); 
   	print("<h1> Reservacion eliminada con exito. </h1>");
    print("<CENTER> <form action='verReservaciones.php'> <input type=submit value='Regresar'> </form> </CENTER>"); }
else
  	print("<h1> No se pudo eliminar, verificar la base de datos </h1>");

	
?>





<?php  include 'footer.php'; ?>
</body>
</html>