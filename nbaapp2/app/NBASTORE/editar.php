<?php
include("conexion.php");
$cone=conectardb();

$id_tenis=$_POST['id_tenis'];
$nombre=$_POST['nombre'];
$marca=$_POST['marca'];
$estilo=$_POST['estilo'];
$precio=$_POST['precio'];


$consulta="UPDATE tenis SET nombre='$nombre',marca='$marca',estilo='$estilo',precio='$precio' WHERE id_tenis='$id_tenis'";
$query= mysqli_query($cone,$consulta);

if($query){
    Header("Location: nba.php");
    
}else {
}
?>