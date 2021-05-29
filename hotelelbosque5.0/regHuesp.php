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
  <li><a href="regHuesp.php"id="selected">Registrar huespedes</a></li>
  <li><a href="visHab.php">Visualizar estado de habitaciones</a></li>        
  <li><a href="index.php">Cerrar Sesión</a></li>        
</ul>

<center><form action="procesarHuesp.php" method="POST">
        <h1> REGISTRAR HUÉSPEDES </h1>
        <p>Nombre(s)</p>
        <input type="text" name="nombre" placeholder=""><br>
        <p>Apellidos</p>
        <input type="text" name="apellidos" placeholder=""><br>
        <p>Edad</p>
        <input type="text" name="edad" placeholder=""><br>

        <p>Genero</p>
        <select name="sexo">
            <option value="Masculino" selected>Masculino</option>
            <option value="Femenino">Femenino</option>
        </select> 

        <p>Correo electronico</p>
        <input type="text" name="email" placeholder=""><br>
        <p>Telefono</p>
        <input type="text" name="telefono" placeholder=""><br>
        <p>Ciudad</p>
        <input type="text" name="ciudad" placeholder=""><br>
        <p>Contraseña.</p>
        <input type="password" name="contraseña" placeholder="" id="1">
        <p>Confirmar contraseña.</p>
        <input type="password" name="contraseña2" placeholder="" id="2"><br><br><br>
        <input type="submit" value="Registrar">

    </form></center><br>

<br><br><br>

</body>
</html>