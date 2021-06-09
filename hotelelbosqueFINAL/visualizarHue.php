<!DOCTYPE html>
<html id="admin">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Hotel El Bosque">
    <meta name="keywords" content="hotel">
    <meta http‐equiv="refresh" content="20;URL=./2PantillaBasica.htm" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloEquBlog.css?1.0" media="all">
       <link  rel="icon"   href="img/hana.png" type="image/png" />
</head>
<body>
<h1>HOTEL "EL BOSQUE"</h1>
<ul>
  <li><a href="inicioRec.php">Inicio</a></li>
  <li><a href="visualizarHue.php"id="selected">Visualizar huespedes</a></li>
  <li><a href="regHuesp.php">Registrar huespedes</a></li>
  <li><a href="visHab.php">Visualizar estado de habitaciones</a></li>        
  <li><a href="index.php">Cerrar Sesión</a></li>        
</ul>

<h1>HUÉSPEDES DE HOTEL "EL BOSQUE"</h1>

<?php
    require 'coneccion.php';
    $Query = "select * from huesped";
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
		<td><strong> Nombre(s)</strong></td>
        <td><strong> Apellidos</strong></td>
		<td><strong> Edad</strong></td>
		<td><strong> Sexo</strong></td>
		<td><strong> E-mail</strong></td>
        <td><strong> Teléfono</strong></td>
        <td><strong> Ciudad</strong></td>
        <td><strong> Contraseña</strong></td>
        <td><strong> Operaciones</strong></td>
		</tr>
<?php
$i = 0;
    while($row =$Result->fetch_array()) {
    $idE = $row["id_huesped"];    
        
?>

    <tr>
        <td> <?php printf($row["nombre"]); ?></td>
        <td> <?php printf($row["apellidos"]); ?></td>
        <td> <?php printf($row["edad"]); ?></td>
        <td> <?php printf($row["sexo"]); ?></td>
        <td> <?php printf($row["email"]); ?></td>
        <td> <?php printf($row["telefono"]); ?></td>
        <td> <?php printf($row["ciudad"]); ?></td>
        <td> <?php printf($row["contrasena"]); ?></td>
        <td>
            <form action= "actualizarHue.php?id=<?php print($idE);?>" method="POST"> 
                    <input type ="submit" value="Actualizar"> 
            </form>

            <form action="confirmarDelHue.php?id=<?php print($idE);?>" method="POST"> 
                        <input type ="submit" value="Eliminar"> 
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