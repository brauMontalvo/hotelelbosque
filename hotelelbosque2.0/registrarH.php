<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="Hotel El Bosque">
    <meta name="keywords" content="hotel">
    <meta http‐equiv="refresh" content="20;URL=./2PantillaBasica.htm" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloEquBlog.css?1.0" media="all">
</head>


<body>

    <center><form action="procesarR.php" method="POST">
        <h1> REGISTRARSE </h1>
        <p>Nombre</p>
        <input type="text" name="nombre" placeholder=""><br>
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
        <input type="password" name="contraseña" placeholder=""><br><br><br>

        <input type="submit" value="Registrar">

    </form></center><br> 

    <center><form action="hlog.php" method="POST">
        <input type="submit" value="Cancelar">

    </form></center><br> 

</body>
</html>