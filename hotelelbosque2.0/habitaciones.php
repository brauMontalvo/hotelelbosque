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
<body>
<h1>HOTEL "EL BOSQUE"</h1>
<ul>
  <li><a href="inicio.php">Inicio</a></li>
  <li><a href="habitaciones.php" id="selected"> Ver habitaciones </a></li>
  <li><a href="hab2.php"> Ver habitaciones (Sin BD) </a></li>   
  <li><a href="index.php" class="cerrar">Cerrar Sesión</a></li>
       
</ul>

<?php
require 'coneccion.php';
$Query = "select * from habitacion";
$Result = $mysql->query( $Query );


	 $numeroRegistros=$Result->num_rows;   
	 if($numeroRegistros<=0) 
   { 
     echo "<div align='center'>"; 
     echo "<h2>No se encontraron registros</h2>"; 
     echo "</div><hr> "; 
   }else{
   ?>
       <table border=1>
        <tr>
		<td><strong> ID</strong></td>
		<td><strong> Numero</strong></td>
		<td><strong> Estado</strong></td>
		<td><strong> Piso</strong></td>
        <td><strong> Capacidad</strong></td>
        <td><strong> Operaciones</strong></td>
		</tr>
		<?php
        while($row =$Result->fetch_array()) {
            
           ?>
		   <tr>
		   <td> <?php print($row["id_habitacion"]);?>  </td>
		   <td> <?php print($row["numero"]); ?>   </td>
		   <td> <?php print($row["estado"]); ?>   </td>
		   <td> <?php print($row["piso"]); ?>   </td>
           <td> <?php print($row["capacidad"]); ?>   </td>
           <td> <a href="reservar.php">Reservar habitacion </a> </td>
           </tr>
<?php	}
}
?>
</table>


<?php  include 'footer.php'; ?>

</body>
</html>