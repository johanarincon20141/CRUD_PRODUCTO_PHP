<?php

    include 'clases/conexion.php';
    include 'clases/producto.php';

    $objConexion = new conexion();
    $objproducto = new producto();

    $conexion = $objConexion->conectar();
    $datos = $objproducto->consultar($conexion);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>DESCRIPCION</th>
            <th>CODIGO</th>
            <th> VALOR UNITARIO</th>
            
        </tr>
   
        <?php
            while($dato = mysqli_fetch_array($datos)){
        ?>
            <tr>
                <td><?php echo $dato['id']; ?></td>
                <td><?php echo $dato['nombre']; ?></td>
                <td><?php echo $dato['descripcion']; ?></td>
                <td><?php echo $dato['codigo']; ?></td>
              
                <td><?php echo $dato['valorunitario']; ?></td>
                <td><a href="editar.php?id=<?php echo $dato['id']; ?> "> Editar </a></td>
                <td><a href="controlador/eliminar.php?id=<?php echo $dato['id']; ?>"> Eliminar </a></td>
            </tr>
        <?php
            }
        ?>
    </table>
    <br><a href="index.html">Atras</a>
    
</body>
</html>