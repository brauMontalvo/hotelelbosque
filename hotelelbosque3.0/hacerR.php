<?php session_start(); ?>
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
    



    require 'coneccion.php';
    if($maximo == 0){
    $Query = "insert into reservacion values (1, ".$id.", ".$_SESSION['hab'].", ".$_SESSION['noches'].", ".$_SESSION['personas'].", ".$_SESSION['total'].");";
    }
    else{ 
    $Query = "insert into reservacion values (".($maximo+1).", ".$id.", ".$_SESSION['hab'].", ".$_SESSION['noches'].", ".$_SESSION['personas'].", ".$_SESSION['total'].");";
    }
    $Result = $mysql->query( $Query );

    if($Result!=null){
?>
<body>
<center><form action="inicio.php">
    <h1> Reservacion hecha correctamente! </h1>
  

    <?php 
     require 'coneccion.php';
     $Query = "update habitacion set estado = 'Ocupada' where id_habitacion = ".$_SESSION['hab'].";";
     $Result = $mysql->query( $Query ); 
     
    ?>


    <input type="submit" value="Volver a inicio">
</form></center><br> 
</body>

<?php }
else {?>

<body>
<center><form action="habitaciones.php">
<h1> Error en la base de datos </h1>
    <input type="submit" value="Intentarlo de nuevo">
    </form></center><br> 
</body>
<?php }?>  
