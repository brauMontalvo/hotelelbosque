<!DOCTYPE html>
<html id="admin">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Hotel El Bosque">
    <meta name="keywords" content="hotel">
    <meta http‐equiv="refresh" content="20;URL=./2PantillaBasica.htm" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloEquBlog.css" media="all">
       <link  rel="icon"   href="img/hana.png" type="image/png" />
</head>
<body>
<h1>HOTEL "EL BOSQUE"</h1>
<ul>
  <li><a href="visualizarEmp.php">Regresar</a></li>      
</ul>
<h1> Actualizando al empleado con ID: &nbsp;   <?php echo($_GET['id'])?>  </h1>

<?php
    require 'coneccion.php';
    $Query = "select * from empleado where id_empleado=" . $_GET['id'];
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
<form action="actualizacionE.php?id=<?php print($_GET['id'])?>" method="POST">
<table id="aldair" border=1>
        <tr> <td><strong> Nombre</strong></td> <td> <input type="text" size=40 name="Nombre" value="<?php print($row['nombre']) ?>"> </td> </tr>
        <tr> <td><strong> Edad</strong></td> <td> <input type="text" size=40 name="Edad" value="<?php print($row['edad']) ?>"> </td> </tr>
        <tr> <td><strong> Sexo</strong></td> <td> 
            <select name="Sexo">
                <option value="Masculino" selected>Masculino</option>
                <option value="Femenino">Femenino</option>
            </select> </td> </tr>
        <tr> <td><strong> Seccion</strong></td> <td> <input type="text" size=40 name="Seccion" value="<?php print($row['seccion']) ?>"> </td> </tr>
        <tr> <td><strong> Cargo</strong></td> <td> <input type="text" size=40 name="Cargo" value="<?php print($row['cargo']) ?>"> </td> </tr>

    <?php	} ?>
</table>
<input type=submit value="Actualizar" >
</form>
</center><br><br>
<?php  include 'footer.php'; ?>
</body>
</html>