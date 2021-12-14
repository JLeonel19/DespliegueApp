<?php

include("conexion.php");
$cone=conectardb();

$id_tenis=$_GET['id_tenis'];

$consulta="DELETE FROM tenis WHERE id_tenis='$id_tenis'";
$query=mysqli_query($cone,$consulta);

    if($query){
        Header("Location: nba.php");
    }
?>