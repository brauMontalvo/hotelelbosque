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
  <li><a href="inicioAdm.php">Inicio</a></li>
  <li><a href="visualizarEmp.php">Visualizar empleados</a></li>
  <li><a href="registrarEmp.php"id="selected">Registrar empleado</a></li>    
  <li><a href="index.php">Cerrar Sesión</a></li>        
</ul><br><br>

<center><form action="procesarEmp.php" method="POST">
    <h1> REGISTRAR EMPLEADO </h1>
    <p>Nombre</p>
        <input type="text" name="nombre" placeholder=""><br>
    <p>Edad</p>
        <input type="text" name="edad" placeholder=""><br>
    <p>Genero</p>
        <select name="sexo">
            <option value="Masculino" selected>Masculino</option>
            <option value="Femenino">Femenino</option>
        </select>
    <p>Sección</p>
        <select name="seccion">
            <option value="seccion1" selected>Sección 1</option>
            <option value="seccion2">Sección 2</option>
            <option value="seccion3">Sección 3</option>
            <option value="seccion4">Sección 4</option>
        </select>
    <p>Cargo</p>
        <input type="text" name="cargo" placeholder=""><br><br><br>

    <input type="submit" value="Registrar">
</form></center><br><br>

<?php  include 'footer.php'; ?>
</body>
</html>