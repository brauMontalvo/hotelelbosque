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
<h1>HOTEL "EL BOSQUE"</h1>
<ul>
  <li><a href="inicioAdm.php">Inicio</a></li>
  <li><a href="visualizarEmp.php">Visualizar empleados</a></li>
  <li><a href="registrarEmp.php">Registrar empleado</a></li>    
  <li><a href="index.php">Cerrar Sesión</a></li>        
</ul>

<h1>EMPLEADOS DE HOTEL "EL BOSQUE"</h1>

<?php
    require 'coneccion.php';
    $Query = "select * from empleado";
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
		<td><strong> Nombre</strong></td>
		<td><strong> Edad</strong></td>
		<td><strong> Sexo</strong></td>
		<td><strong> Seccion</strong></td>
        <td><strong> Cargo</strong></td>
		</tr>
<?php
    while($row =$Result->fetch_array()) {	    
?>

    <tr>
        <td> <?php printf($row["nombre"]); ?></td>
        <td> <?php printf($row["edad"]); ?></td>
        <td> <?php printf($row["sexo"]); ?></td>
        <td> <?php printf($row["seccion"]); ?></td>
        <td> <?php printf($row["cargo"]); ?></td>
    </tr>
    <?php	}
    }
    ?>
</table></center><br><br>
<?php  include 'footer.php'; ?>
</body>
</html>