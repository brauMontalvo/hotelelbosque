<?php
    if(isset($_POST['submit'])){
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL EL BOSQUE</title>
    <link rel="stylesheet" href="css/login.css?1.0" media="all">
    <link rel="stylesheet" href="css/cabecera.css?1.0" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>
    <h1 class="animate__animated animate__backInLeft">Hotel "El Bosque"</h1><br><br>
   <form action="validar.php" method="post">
   <h1 class="animate__animated animate__backInLeft">Iniciar Sesion</h1>

   <p>Usuario <input type="text" placeholder="ingrese su nombre" name="usuario"></p>

   <p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="contraseña"></p>
   
   <input type="submit" value="Ingresar">

</body>
</html>