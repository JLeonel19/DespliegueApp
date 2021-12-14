<?php
include("conexion.php");
$cone=conectardb();

$id_tenis=$_GET['id_tenis'];

$consulta="SELECT * FROM tenis WHERE id_tenis='$id_tenis'";
$query= mysqli_query($cone,$consulta);

$datos=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <title>Actualizar</title>
</head>
<body>
    <div class="tabla2">
        <form action="editar.php" method="POST">
                    
                <input type="hidden" name="id_tenis" value="<?php echo $datos['id_tenis']  ?>">
                                
                    <input type="text" class="" name="nombre" placeholder="Nombre" value="<?php echo $datos['nombre']  ?>">
                    <input type="text" class="" name="marca" placeholder="Marca" value="<?php echo $datos['marca']  ?>">
                    <input type="text" class="" name="estilo" placeholder="Estilo" value="<?php echo $datos['estilo']  ?>">
                    <input type="text" class="" name="precio" placeholder="Precio" value="<?php echo $datos['precio']  ?>">
                                
                <input type="submit" class="" value="Actualizar">
        </form>
                    
    </div>
</body>
</html>
