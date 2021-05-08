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
  <li><a href="habitaciones.php" > Ver habitaciones </a></li>
  <li><a href="hab2.php" id="selected"> Ver habitaciones (Sin BD) </a></li>   
  <li><a href="index.php" class="cerrar">Cerrar Sesión</a></li>
       
</ul>

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
        $i =0;
        while($i<16) {
            $i++;
           ?>
		   <tr>
		   <td> <?php print($i)?>  </td>
		   <td> <?php print($i)?>  </td>
		   <td>  Libre </td>
		   <td>  2  </td>
           <td>  3  </td>
           <td> <a href="reservar.php">Reservar habitacion </a> </td>
           </tr>
<?php  } ?>
</table>
</body>
</html>