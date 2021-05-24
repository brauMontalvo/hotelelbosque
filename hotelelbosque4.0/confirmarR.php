<?php session_start();
$_SESSION ['total'] = $_SESSION['pre'] * $_POST['cantNoc'];
$_SESSION ['noches'] = $_POST['cantNoc'];
$_SESSION ['personas'] = $_POST['cantPer'];
$huesp = $_SESSION ['nom'];


?>

<!DOCTYPE html>
<html lang="es" id="huesp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL EL BOSQUE</title>
    <!-- <link rel="stylesheet" href="css/login.css?1.0" media="all"> 
    <link rel="stylesheet" href="css/cabecera.css?1.0" media="all">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"> -->
    <link rel="stylesheet" href="css/estiloEquBlog2.css" media="all">
</head>
<body>
    <h1> Hotel "El Bosque"</h1><br><br>
    <h1> ¿Los datos son correctos? </h1>
    <center>
   <table> 
        <tr> 
         <td> <strong>NOMBRE COMPLETO DEL HUÉSPED: </strong></td>
        <td> <?php echo $huesp; ?> </td> </tr>

        <td> <strong> NUMERO DE HABITACION: </strong></td> 
        <td>  <?php echo $_SESSION['hab']; ?>  </td> </tr>

        <tr> <td> <strong> NUMERO DE PISO: </strong> </td> 
        <td>  <?php echo $_SESSION['pis']; ?>  </td> </tr>

        <tr> <td> <strong> DESCRIPCION: </strong> </td> 
        <td> <?php echo $_SESSION['des']; ?> </td> </tr>

        <tr> <td> <strong> CANTIDAD DE PERSONAS A HOSPEDARSE: </strong> </td> 
        <td>  <?php echo $_POST['cantPer']; ?> </td> </tr>

        <tr> <td> <strong> CANTIDAD DE NOCHES DEL HOSPEDARSE: </strong> </td> 
        <td>  <?php echo $_POST['cantNoc']; ?> </td> </tr>

        <tr> <td> <strong> COSTO INDIVIDUAL DE CADA NOCHE: </strong> </td> 
        <td>  $<?php echo $_SESSION['pre']; ?> </td> </tr>

        <tr> <td> <strong> COSTO TOTAL: </strong> </td> 
        <td>  $<?php print ($_SESSION['total']); ?> </td>  </tr>
    </table>    
    </center>
    <br><br><br><br>

<center>
    <form action="hacerR.php" method="POST">
    <input type="text" value="<?php print ($_SESSION['noches']);?>" style="display:none">
    <input type="text" value="<?php print ($_SESSION['personas']);?>" style="display:none">
    <input type="submit" value="Aceptar">
    </form>

    <form action="habitaciones.php" method="POST">
    <input type="submit" value="Cancelar">
    </form>



</center>




<?php  include 'footer.php'; ?>
</body>
</html>
