<?php session_start();?>
<!DOCTYPE html>
<html id="huesp">
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
  <li><a href="verReservaciones.php"> Visualizar reservaciones </a></li>
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
  
      <center> <table border=1>
        <tr>
		<td><strong> ID</strong></td>
		<td><strong> Numero</strong></td>
		<td><strong> Estado</strong></td>
		<td><strong> Piso</strong></td>
    <td><strong> Capacidad</strong></td>
    <td><strong> Descripcion</strong></td>
    <td><strong> Precio por noche</strong></td>
    <td><strong> Operaciones</strong></td>


		</tr>
		<?php
      $i=0;
        while($row =$Result->fetch_array()) {
        $i++;    
           ?>
            
		   <tr>
		   <td> <?php print($row["id_habitacion"]);?>  </td>
		   <td> <?php print($row["numero"]); ?>   </td>
		   <td> <?php print($row["estado"]); ?>   </td>
		   <td> <?php print($row["piso"]); ?>   </td>
       <td> <?php print($row["capacidad"]); ?>   </td>
       <td> <?php print($row["descripcion"]); ?>   </td>
       <td> <?php print("$".$row["precio"]); ?>   </td>
      
      

       <form action= "reservar.php?numero=<?php print($i); ?>" method="POST"> 
        		   <input type="text" name="hab<?php print $i;?>" value="<?php print($row["id_habitacion"]);?>" style="display:none">   
               <input type="text" name="num<?php print $i;?>" value="<?php print($row["numero"]);?>" style="display:none"> 
               <input type="text" name="est<?php print $i;?>" value="<?php print($row["estado"]);?>" style="display:none">
               <input type="text" name="pis<?php print $i;?>" value="<?php print($row["piso"]);?>" style="display:none">
               <input type="text" name="cap<?php print $i;?>" value="<?php print($row["capacidad"]);?>" style="display:none">    
               <input type="text" name="des<?php print $i;?>" value="<?php print($row["descripcion"]);?>" style="display:none">    
               <input type="text" name="pre<?php print $i;?>" value="<?php print($row["precio"]);?>" style="display:none"> 
               <td> <input type ="submit" value="Reservar"> </td> 
      </form>
      </tr>
<?php	}
}
?>

</table></center>


<?php  include 'footer.php'; ?>

</body>
</html>