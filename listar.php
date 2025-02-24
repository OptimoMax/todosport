<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    
    
</head>
<body style="font-family: Arial, sans-serif;">
    
    <h1>Tienda de ropa</h1>
    <a href="index.php" style="display: inline-block; padding: 8px 16px; text-align: center; text-decoration: none; background-color: #337ab7; color: white; border: 1px solid #337ab7; border-radius: 4px; transition: background-color 0.3s ease;">Inicio</a>
<a href="listar.php" style="display: inline-block; padding: 8px 16px; text-align: center; text-decoration: none; background-color: #337ab7; color: white; border: 1px solid #337ab7; border-radius: 4px; transition: background-color 0.3s ease;">Listar ropa</a>
<a href="agregar.html" style="display: inline-block; padding: 8px 16px; text-align: center; text-decoration: none; background-color: #337ab7; color: white; border: 1px solid #337ab7; border-radius: 4px; transition: background-color 0.3s ease;">Agregar ropa</a>

    <h2>Lista de ropa</h2>
    <p>La siguiente lista muestra los datos de la ropa actualmente en stock.</p>
    <table style="border-collapse: collapse; width: 100%; text-align: center;">
    <tr style="background-color: #337ab7; color: white;">
        <th>ID</th>
        <th>TIPO DE PRENDA</th>
        <th>MARCA</th>
        <th>TALLE</th>
        <th>PRECIO</th>
        <th>IMAGEN</th>
        <th>EDITAR</th>
        <th>BORRAR</th>
    </tr>
    <?php
    // 1) Conexion
    $conexion = mysqli_connect("localhost", "id21595791_todosporrt", "Wet134wet134!");
                  mysqli_select_db($conexion, "id21595791_tienda");


    // 2) Preparar la orden SQL
    // Sintaxis SQL SELECT
    // SELECT * FROM nombre_tabla
    // => Selecciona todos los campos de la siguiente tabla
    // SELECT campos_tabla FROM nombre_tabla
    // => Selecciona los siguientes campos de la siguiente tabla
    $consulta='SELECT * FROM ropa';

    // 3) Ejecutar la orden y obtenemos los registros
    $datos= mysqli_query($conexion, $consulta);


    // 4) Mostrar los datos del registro
     while ($reg=mysqli_fetch_array($datos)) { ?>
        <tr>
        <td><?php echo $reg['id']; ?></td>
        <td><?php echo $reg['prenda']; ?></td>
        <td><?php echo $reg['marca']; ?></td>
        <td><?php echo $reg['talle']; ?></td>
        <td><?php echo $reg['precio']; ?></td>
        <td><img src="data:image/png;base64, <?php echo base64_encode($reg['imagen'])?>" alt="" width="100px" height="100px"></td>
        <td><a href="modificar.php?id=<?php echo $reg['id'];?>">Editar</a></td>
        <td><a href="borrar.php?id=<?php echo $reg['id'];?>">Borrar</a></td>
        </tr>
    <?php } ?>
  </table>

</body>
</html>
