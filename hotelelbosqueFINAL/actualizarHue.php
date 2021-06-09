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
<h1>HOTEL "EL BOSQUE"</h1>
<ul>
  <li><a href="visualizarHue.php">Regresar</a></li>      
</ul>
<h1> Actualizando al huésped con ID: &nbsp;   <?php echo($_GET['id'])?>  </h1>

<?php
    require 'coneccion.php';
    $Query = "select * from huesped where id_huesped=" . $_GET['id'];
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
<form action="actualizacionHue.php?id=<?php print($_GET['id'])?>" method="POST">
<table id="aldair" border=1>
        <tr> <td><strong> Nombre(s)</strong></td> <td> <input type="text" size=40 name="Nombre" value="<?php print($row['nombre']) ?>"> </td> </tr>
        <tr> <td><strong> Apellidos</strong></td> <td> <input type="text" size=40 name="Apellidos" value="<?php print($row['apellidos']) ?>"> </td> </tr>
        <tr> <td><strong> Edad</strong></td> <td> <input type="text" size=40 name="Edad" value="<?php print($row['edad']) ?>"> </td> </tr>
        <tr> <td><strong> Sexo</strong></td> <td> 
            <select name="Sexo">
                <option value="Masculino" selected>Masculino</option>
                <option value="Femenino">Femenino</option>
            </select> </td> </tr>
        <tr> <td><strong> E-mail</strong></td> <td> <input type="text" size=40 name="Email" value="<?php print($row['email']) ?>"> </td> </tr>
        <tr> <td><strong> Teléfono</strong></td> <td> <input type="text" size=40 name="Telefono" value="<?php print($row['telefono']) ?>"> </td> </tr>
        <tr> <td><strong> Ciudad</strong></td> <td> <input type="text" size=40 name="Ciudad" value="<?php print($row['ciudad']) ?>"> </td> </tr>
        <tr> <td><strong> Contraseña</strong></td> <td> <input type="text" size=40 name="Contrasena" value="<?php print($row['contrasena']) ?>"> </td> </tr>

    <?php	} ?>
</table>
<input type=submit value="Actualizar" >
</form>
</center><br><br>
<?php  include 'footer.php'; ?>
</body>
</html>