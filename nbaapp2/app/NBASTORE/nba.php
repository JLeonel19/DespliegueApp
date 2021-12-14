<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NBA STORE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, 
                                    user-scalable=no, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/inicio.css">
</head>
<body class="body">
<?php
    include("conexion.php");
    $cone = conectardb();

    $consulta = "SELECT * FROM tenis";
    $query = mysqli_query($cone,$consulta);

    $info = mysqli_fetch_array($query);
?>
    <div class="padre">
        <h1 class="bienvenida">
            BIENVENIDO AL REGISTRO DE TENIS
        </h1>
        <div class="formulario">
            <h1 class="info">
                Ingresa los datos
            </h1>

            <form action="insertar.php" method="POST">
                <input type="text" class="diseño-colu" name="id_tenis" placeholder="ID">
                <input type="text" class="diseño-colu" name="nombre" placeholder="Nombre">
                <input type="text" class="diseño-colu" name="marca" placeholder="Marca">
                <input type="text" class="diseño-colu" name="estilo" placeholder="Estilo">
                <input type="text" class="diseño-colu" name="precio" placeholder="Precio">

                <input type="submit" class="boton_agregar">
            </form>
        </div>
        <div class="campotabla">
            <table class="tabla">
                <head class="cabeza">
                    <tr>
                        <th>
                            Id_Codigo
                        </th>
                        <th>
                            Nombre
                        </th>
                        <th>
                            Marca
                        </th>
                        <th>
                            Estilo
                        </th>
                        <th>
                            Precio
                        </th>
                    </tr>
                </head>

                <tbody>
                    <h1>Registros</h1>
                        <?php
                            while($info=mysqli_fetch_array($query)){
                        ?>
                            <tr>
                            <th><?php   echo $info['id_tenis']?></th>
                            <th><?php   echo $info['nombre']?></th>
                            <th><?php   echo $info['marca']?></th>
                            <th><?php   echo $info['estilo']?></th>
                            <th><?php   echo $info['precio']?></th>
                            <th><a href="actualizar.php?id_tenis=<?php echo $info['id_tenis'] ?>" class="botonactualziar">Editar</a></th>
                            <th><a href="delete.php?id_tenis=<?php echo $info['id_tenis'] ?>" class="botoneliminar">Eliminar</a></th>
                            </tr>
                        <?php
                            }
                        ?>
                
                </tbody>
            </table>
        </div>
        <a href="index.html" class="navegacion">Ir a la pagina de inicio</a>
    </div>
</body>
</html>