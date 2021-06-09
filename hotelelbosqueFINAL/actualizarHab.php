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
  <li><a href="visHab.php">Regresar</a></li>      
</ul>
<h1> Actualizando habitación con ID: &nbsp;   <?php echo($_GET['id'])?>  </h1>

<?php
    require 'coneccion.php';
    $Query = "select * from habitacion where id_habitacion=" . $_GET['id'];
    $Result = $mysql->query( $Query );
    $numeroRegistros=$Result->num_rows;
    if($numeroRegistros<=0) 
    { 
     echo "<div align='center'>"; 
     echo "<h2>No se encontraron resultados</h2>"; 
     echo "</div><hr> "; 
    }else{
        $row =$Result->fetch_array() 
?>
<center>
<form action="actualizacionHab.php?id=<?php print($_GET['id'])?>" method="POST">
<table id="aldair" border=1>
        <tr> <td><strong> Número</strong></td> <td> <input type="text" size=40 name="Numero" value="<?php print($row['numero']) ?>"> </td> </tr>
        <tr> <td><strong> Estado</strong></td> <td> <input type="text" size=40 name="Estado" value="<?php print($row['estado']) ?>"> </td> </tr>
        <tr> <td><strong> Piso</strong></td> <td> <input type="text" size=40 name="Piso" value="<?php print($row['piso']) ?>"> </td> </tr>
        <tr> <td><strong> Capacidad</strong></td> <td> <input type="text" size=40 name="Capacidad" value="<?php print($row['capacidad']) ?>"> </td> </tr>
        <tr> <td><strong> Descripción</strong></td> <td> <input type="text" size=40 name="Descripcion" value="<?php print($row['descripcion']) ?>"> </td> </tr>
        <tr> <td><strong> Precio</strong></td> <td> <input type="text" size=40 name="Precio" value="<?php print($row['precio']) ?>"> </td> </tr>
        
    <?php	} ?>
</table>
<input type=submit value="Actualizar" >
</form>
</center><br><br>
<?php  include 'footer.php'; ?>
</body>
</html>