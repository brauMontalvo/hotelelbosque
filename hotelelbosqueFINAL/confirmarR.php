<?php session_start();
$_SESSION ['personas'] = $_POST['cantPer'];
$huesp = $_SESSION ['nom'];
$_SESSION ['fechaInicio'] = $_POST['fechaIn'];
$_SESSION ['fechaFinal'] = $_POST['fechaFin'];


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
    <link rel="stylesheet" href="css/estiloEquBlog2.css" media="all">
       <link  rel="icon"   href="img/hana.png" type="image/png" />
</head>
<body id= 'bodyB'>
<?php 

 $datos = calculaNoches($_POST['fechaIn'], $_POST['fechaFin']);
            
            function calculaNoches($fechainicio, $fechafin){
                $datetime1 = date_create($fechainicio);
                $datetime2 = date_create($fechafin);
                $interval = date_diff($datetime1, $datetime2);
                
                $tiempo = array();
                
                foreach($interval as $valor){
                    $tiempo[] = $valor;
                    
                }
                return $tiempo;
            }
            
            $_SESSION ['total'] = $_SESSION['pre'] * $datos[2];
            $_SESSION ['noches'] = $datos[2];



$fechaInicio = strtotime($_SESSION['fechaInicio']);
$fechaFin = strtotime($_SESSION['fechaFinal']);
$bandera = true;
require 'coneccion.php';
$dia=86400;
    for($i=$fechaInicio; $i<=$fechaFin; $i+=$dia){
    $fechaUno = date("Y-m-d", $i);    
    $Query = "select fecha from habfecha WHERE fecha = '".$fechaUno."' AND id_habitacion = ".$_SESSION['hab'].";";
    $Result = $mysql->query( $Query );
    $row =$Result->fetch_array();
     if($fechaUno == $row["fecha"]){
    $bandera = false;    
    } 
    
    }
   
   
if($bandera == true){
?>

    <h1> Hotel "El Bosque"</h1><br><br>
    <h1> ??Los datos son correctos? </h1>
    <center>
   <table id="aldair"> 
        <tr> 
         <td> <strong>NOMBRE COMPLETO DEL HU??SPED: </strong></td>
        <td> <?php echo $huesp; ?> </td> </tr>

        <td> <strong> NUMERO DE HABITACION: </strong></td> 
        <td>  <?php echo $_SESSION['hab']; ?>  </td> </tr>

        <tr> <td> <strong> NUMERO DE PISO: </strong> </td> 
        <td>  <?php echo $_SESSION['pis']; ?>  </td> </tr>

        <tr> <td> <strong> DESCRIPCION: </strong> </td> 
        <td> <?php echo $_SESSION['des']; ?> </td> </tr>

        <tr> <td> <strong> CANTIDAD DE PERSONAS A HOSPEDARSE: </strong> </td> 
        <td>  <?php echo $_POST['cantPer']; ?> </td> </tr>
        
        <tr> <td> <strong> FECHA DE INICIO DE HOSPEDAJE: </strong> </td> 
        <td>  <?php echo $_POST['fechaIn']; ?> </td> </tr>
        
        <tr> <td> <strong> FECHA DE FINALIZACI??N DE HOSPEDAJE: </strong> </td> 
        <td>  <?php echo $_POST['fechaFin']; ?> </td> </tr>


        <tr> <td> <strong> CANTIDAD DE NOCHES DEL HOSPEDARSE: </strong> </td> 
        <td>  <?php echo $_SESSION ['noches']; ?> </td> </tr>
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
    <input type="text" value="<?php print ($_SESSION['fechaInicio']);?>" style="display:none">
    <input type="text" value="<?php print ($_SESSION['fechaFinal']);?>" style="display:none">
    <input type="submit" value="Aceptar">
    </form>

    <form action="habitaciones.php" method="POST">
    <input type="submit" value="Cancelar">
    </form>



</center>
</body>
<?php }
else { ?>
<CENTER>
<h1> Las fechas ya se encuentran reservadas, favor de elegir otras... </h1>

<form action ='habitaciones.php'>
    
<input type= submit value= "Regresar">  
</form>

</CENTER>
</body>
<?php } ?>
<?php  include 'footer.php'; ?>
</html>

