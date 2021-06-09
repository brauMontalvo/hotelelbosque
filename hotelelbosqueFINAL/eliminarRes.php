<?php
    ob_start();
    session_start();
?>
<!DOCTYPE html>
<html id="admin">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Hotel El Bosque">
    <meta name="keywords" content="hotel">
    <meta http‐equiv="refresh" content="20;URL=./2PantillaBasica.htm" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloEquBlog.css" media="all">
       <link  rel="icon"   href="img/hana.png" type="image/png" />
</head>
<body>

<?php 
require 'coneccion.php';
$Query = "SELECT id_habitacion from reservacion WHERE id_reservacion = ".$_GET["id2"].";";
$Result = $mysql->query( $Query );
$row =$Result->fetch_array();
$habit = $row['id_habitacion'];


$Query = "delete from habfecha WHERE id_habitacion =".$habit.";";
$Result = $mysql->query( $Query );

if($Result!=null){
   	print("<h1> Fechas reservadas eliminadas con exito. </h1>");
   }
else{
  	print("<h1> No se pudieron eliminar las fechas reservadas... </h1>");} 


$Query = "delete from reservacion WHERE id_reservacion=".$_GET["id2"].";";
$Result = $mysql->query( $Query );

if($Result!=null){
   	print("<h1> Reservacion eliminada con exito. </h1>"); 
   	 print("<CENTER> <form action='verReservaciones.php'> <input type=submit value='Regresar'> </form> </CENTER>"); }
else{
  	print("<h1> No se pudo eliminar, verificar la base de datos </h1>");}
  	
  
 	
?>







<?php  include 'footer.php'; ?>
</body>
</html>