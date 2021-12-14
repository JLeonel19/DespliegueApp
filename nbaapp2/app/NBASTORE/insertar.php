<?php
include("conexion.php");
$cone=conectardb();

$id_tenis=$_POST['id_tenis'];
$nombre=$_POST['nombre'];
$marca=$_POST['marca'];
$estilo=$_POST['estilo'];
$precio=$_POST['precio'];


$consulta="INSERT INTO tenis VALUES('$id_tenis','$nombre','$marca','$estilo','$precio')";
$query= mysqli_query($cone,$consulta);

if($query){
    Header("Location: nba.php");
    
}else {
}
?>