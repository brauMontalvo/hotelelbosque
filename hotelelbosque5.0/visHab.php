<!DOCTYPE html>
<html id="admin">
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
  <li><a href="inicioRec.php">Inicio</a></li>
  <li><a href="visualizarHue.php">Visualizar huespedes</a></li>
  <li><a href="regHuesp.php">Registrar huespedes</a></li>
  <li><a href="visHab.php"id="selected">Visualizar estado de habitaciones</a></li>        
  <li><a href="index.php">Cerrar Sesión</a></li>        
</ul>

<h1> Estado actual de las habitaciones</h1>

<?php
    require 'coneccion.php';
    $Query = "select * from habitacion";
    $Result = $mysql->query( $Query );
    $numeroRegistros=$Result->num_rows;
    if($numeroRegistros<=0) 
    { 
     echo "<div align='center'>"; 
     echo "<h2>No se encontraron resultados</h2>"; 
     echo "</div><hr> "; 
    }else{
?>

<center><table id="aldair" border=1>
        <tr>
		<td><strong> ID Habitación</strong></td>
        <td><strong> Número</strong></td>
		<td><strong> Estado</strong></td>
		<td><strong> Piso</strong></td>
		<td><strong> Capacidad</strong></td>
        <td><strong> Descripción</strong></td>
        <td><strong> Precio</strong></td>
        <td><strong> Operaciones</strong></td>
		</tr>

        <?php
        $i = 0;
        while($row =$Result->fetch_array()) {
        $idE = $row["id_habitacion"];    
        
    ?>

    <tr>
        <td> <?php printf($row["id_habitacion"]); ?></td>
        <td> <?php printf($row["numero"]); ?></td>
        <td> <?php printf($row["estado"]); ?></td>
        <td> <?php printf($row["piso"]); ?></td>
        <td> <?php printf($row["capacidad"]); ?></td>
        <td> <?php printf($row["descripcion"]); ?></td>
        <td> <?php printf($row["precio"]); ?></td>
        <td>
            <form action= "actualizarHab.php?id=<?php print($idE);?>" method="POST"> 
                    <input type ="submit" value="Actualizar"> 
            </form>
        </td>
    </tr>
    <?php	}
    }
    ?>
</table></center><br><br>
<?php  include 'footer.php'; ?>


</body>
</html>