<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL EL BOSQUE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link rel="stylesheet" href="css/login.css?1.0" media="all">
    <link rel="stylesheet" href="css/cabecera.css?1.0" media="all">
   
</head>
<body>

    <h1 class="animate__animated animate__backInLeft" id="titulo">Hotel "El Bosque"</h1><br><br>

   <form> <h1 class="animate__animated animate__backInLeft">¿Que tipo de usuario eres?</h1></form>

   <form action="hlog.php" method="POST">
   <input type="submit" value="Huesped">
</form>

   <form action="alog.php" method="POST">
   <input type="submit" value="Administrador">
</form>

<?php  include 'footer.php'; ?>

</body>


</html>