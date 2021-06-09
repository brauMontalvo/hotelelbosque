<?php session_start();
$_SESSION ['hab'] = $_POST['hab'.$_GET['numero']];
$_SESSION ['pis'] = $_POST['pis'.$_GET['numero']];
$_SESSION['cap'] = $_POST['cap'.$_GET['numero']];
$_SESSION['des']= $_POST['des'.$_GET['numero']];
$_SESSION['pre']= $_POST['pre'.$_GET['numero']];
$huesp = $_SESSION ['nom'];

require 'coneccion.php';
$Query = "select * from reservacion";
$Result = $mysql->query( $Query );
$row =$Result->fetch_array();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL EL BOSQUE</title>
    <!-- <link rel="stylesheet" href="css/login.css?1.0" media="all"> 
    <link rel="stylesheet" href="css/cabecera.css?1.0" media="all">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"> -->
      <link  rel="icon"   href="img/hana.png" type="image/png" />
    <link rel="stylesheet" href="css/estiloEquBlog2.css" media="all">
</head>
<body id='bodyB'>
    <h1 class="animate__animated animate__backInLeft">Hotel "El Bosque"</h1><br><br>
    <center>
   <table id="aldair"> 
        <tr> <td> <strong>NOMBRE COMPLETO DEL HUÉSPED: </strong></td>
        <td> <?php echo $huesp; ?> </td> </tr>

        <tr> <td> <strong> NUMERO DE HABITACION: </strong></td> 
        <td>  <?php echo $_POST['hab'.$_GET['numero']]; ?>  </td> </tr>

        <tr> <td> <strong> NUMERO DE PISO: </strong> </td> 
        <td>  <?php echo $_POST['pis'.$_GET['numero']]; ?>  </td> </tr>

        <tr> <td> <strong> CAPACIDAD (CANTIDAD DE PERSONAS): </strong> </td> 
        <td>  <?php echo $_POST['cap'.$_GET['numero']]; ?> </td> </tr>

        <tr> <td> <strong> DESCRIPCION: </strong> </td> 
        <td> <?php echo $_POST['des'.$_GET['numero']]; ?> </td> </tr>

        <tr> <td> <strong> PRECIO (POR NOCHE): </strong> </td> 
        <td>  $<?php echo $_POST['pre'.$_GET['numero']]; ?> </td>  </tr>

    </table>    
    </center>
    <br><br><br><br>

<center>
    <form action="confirmarR.php" method="POST">
        <p> Fecha de inicio de hospedaje: </p>
        <input type="date" name="fechaIn" min="<?php echo date("Y-m-d",strtotime('$row["fechaIn"]'.'$row["fechaFin"]')); ?>"/>
        <p> Fecha de finalización de hospedaje: </p>
        <input type="date" name="fechaFin"/>
        <p> Cantidad de personas a hospedarse: </p>
        <input type="number" name="cantPer"  min="1" max="<?php echo($_POST['cap'.$_GET['numero']]); ?>" value="1">
        <input type="submit" value="Reservar">
    </form>
    
    <form action="habitaciones.php">
        <input type="submit" value="Cancelar">
    </form>
</center>




<?php  include 'footer.php'; ?>
</body>
</html>


