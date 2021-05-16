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
    <h1 class="animate__animated animate__backInLeft" id="titulo">Hotel "El Bosque"</h1><br><br>

   <form action="validarH.php" method="POST">
   <h1 class="animate__animated animate__backInLeft">Iniciar sesi&oacute;n</h1>

   <p>Huesped <input type="text" placeholder="Ingrese su correo electr&oacute;nico" name="correo"></p>

   <p>Contraseña <input type="password" placeholder="Ingrese su contraseña" name="contraseña"></p>
   
   <input type="submit" value="Ingresar">
</form>


   <form action="registrarH.php" method="POST">
   <h1 class="animate__animated animate__backInLeft">¿No tienes una cuenta?</h1>
   <input type="submit" value="Registrate">
   </form>

   <center><form action="index.php">
   <input type="submit" value="Regresar">
   </form></center><br> 


   <?php  include 'footer.php'; ?>

</body>
</html>