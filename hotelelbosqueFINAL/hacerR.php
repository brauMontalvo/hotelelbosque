<?php session_start(); ?>
<!DOCTYPE html>
<html id="huesp">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Hotel El Bosque">
    <meta name="keywords" content="hotel">
    <meta http‐equiv="refresh" content="20;URL=./2PantillaBasica.htm" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloEquBlog2.css" media="all">
       <link  rel="icon"   href="img/hana.png" type="image/png" />
</head>

<?php

    $maximo = 0;
    require 'coneccion.php';
    $Query = "select max(id_reservacion) as maximo from reservacion;";
    $Result = $mysql->query( $Query ); 
    if($Result!=null){
        $row =$Result->fetch_array();
        $maximo = $row["maximo"];
   }
 else {
    $maximo = 0;
    } 
    


    require 'coneccion.php';
    $Query = "select id_huesped from huesped where email = '".$_SESSION['email']."';";
    $Result = $mysql->query( $Query ); 
    $row =$Result->fetch_array();
    $id = $row["id_huesped"];
    $fechaInicio = strtotime($_SESSION['fechaInicio']);
    $fechaFin = strtotime($_SESSION['fechaFinal']);
    



    require 'coneccion.php';
    if($maximo == 0){
    $Query = "insert into reservacion values (1, ".$id.", ".$_SESSION['hab'].", ".$_SESSION['noches'].", ".$_SESSION['personas'].", ".$_SESSION['total'].", '".$_SESSION['fechaInicio']."', '".$_SESSION['fechaFinal']."');";
    }
    else{ 
    $Query = "insert into reservacion values (".($maximo+1).", ".$id.", ".$_SESSION['hab'].", ".$_SESSION['noches'].", ".$_SESSION['personas'].", ".$_SESSION['total'].", '".$_SESSION['fechaInicio']."', '".$_SESSION['fechaFinal']."');";
    }
    $Result = $mysql->query( $Query );

    if($Result!=null){
?>
<body id='bodyB'>
<center><form action="verReservaciones.php">
    <h1> Reservacion hecha correctamente! </h1>
  

    <?php 
    $dia=86400;
    for($i=$fechaInicio; $i<=$fechaFin; $i+=$dia){
    $fechaUno = date("Y-m-d", $i);    
    $Query = "insert into habfecha values ('".$fechaUno."', ".$_SESSION['hab'].");";
    $Result = $mysql->query( $Query );
    }    
   /* $Query = "insert into habfecha values ('".$fechaFin."', ".$_SESSION['hab'].");";
    $Result = $mysql->query( $Query ); */
     
     
    ?>


    <input type="submit" value="Volver a inicio">
</form></center><br> 
</body> 

<?php }
else { ?>
<body>
<center><form action="habitaciones.php">
<h1> Error en la base de datos </h1>
    <input type="submit" value="Intentarlo de nuevo">
    </form></center><br> 
</body>


<?php }?> 
</html>
