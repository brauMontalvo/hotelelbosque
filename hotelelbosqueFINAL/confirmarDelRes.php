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

<h1> ¿Estas seguro de que quieres cancelar esta reservación? <?php ?> </h1>
<?php $reserv = $_GET["id"];?>

<CENTER>
<form action="verReservaciones.php">
<input type=submit value="Cancelar">
</form>

<form action="eliminarRes.php?id2=<?php print($reserv);?>" method="POST">
<input type=submit value="Aceptar">
</form>
</CENTER>

<?php  include 'footer.php'; ?>
</body>
</html>