<?php session_start();?>
<!DOCTYPE html>
<html id="huesp">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Hotel El Bosque">
    <meta name="keywords" content="hotel">
    <meta http‐equiv="refresh" content="20;URL=./2PantillaBasica.htm" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloEquBlog.css?1.0" media="all" >
       <link  rel="icon"   href="img/hana.png" type="image/png" />
</head>
<body>
<h1>HOTEL "EL BOSQUE"</h1>
<ul>
  <li><a href="inicio.php" >Inicio</a></li>
  <li><a href="habitaciones.php"> Ver habitaciones </a></li>
  <li><a href="verReservaciones.php" id="selected"> Visualizar reservaciones </a></li>
  <li><a href="index.php" class="cerrar">Cerrar Sesión</a></li>
       
</ul>

<h1>Mis reservaciones</h1>

<?php

require 'coneccion.php';
$Query = "select * from reservacion WHERE id_huesped=".$_SESSION ['hue'];
$Result = $mysql->query( $Query );


	 $numeroRegistros=$Result->num_rows;   
	 if($numeroRegistros<=0) 
   { 
     echo "<div align='center'>"; 
     echo "<h2>No se encontraron registros</h2>"; 
     echo "</div><hr> "; 
   }else{
    ?>
  
    <center><table border=1 id="aldair">
     <tr>
     <td><strong> ID Reservación</strong></td>
     <td><strong> ID Huésped</strong></td>
     <td><strong> ID Habitación</strong></td>
     <td><strong> Noches a hospedarse</strong></td>
     <td><strong> Fecha de inicio de hospedaje</strong></td>
     <td><strong> Fecha de fin de hospedaje</strong></td>
     <td><strong> Personas a hospedarse</strong></td>
     <td><strong> Total a pagar</strong></td>
     <td><strong> Operaciones</strong></td>
     </tr>
		<?php
      $i=0;
        while($row =$Result->fetch_array()) {
        $i++;    
        $idE = $row["id_reservacion"];    
           ?>

          <tr>
		   <td> <?php print($row["id_reservacion"]);?>  </td>
		   <td> <?php print($row["id_huesped"]); ?>   </td>
		   <td> <?php print($row["id_habitacion"]); ?>   </td>
		   <td> <?php print($row["cantidad_noches"]); ?>   </td>
		   <td> <?php print($row['fechaIn']); ?>   </td>
		   <td> <?php print($row['fechaFin']); ?>   </td>
           <td> <?php print($row["cant_personas"]); ?>   </td>
           <td> <?php print("$".$row["total"]); ?>   </td>
           <td>

        <form action= "confirmarDelRes.php?id=<?php print($idE);?>" method="POST"> 
        <input type ="submit" value="Cancelar reservación"> 
        </form>
           </td>
      </tr>

    <?php
    }
}
?>

</table></center>
<?php  include 'footer.php'; ?>
</body>
</html>