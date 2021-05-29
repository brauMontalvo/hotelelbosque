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

<h1> ¿Estas seguro de que quieres eliminar al empleado? <?php ?> </h1>
<?php $empleado = $_GET["id"];?>

<CENTER>
<form action="visualizarEmp.php">
<input type=submit value="Cancelar">
</form>

<form action="eliminarE.php?id2=<?php print($empleado);?>" method="POST">
<input type=submit value="Aceptar">
</form>
</CENTER>

<?php  include 'footer.php'; ?>
</body>
</html>