<?php

    include 'clases/conexion.php';
    include 'clases/producto.php';

    $objConexion = new conexion();
    $objproducto = new producto();

    $conexion = $objConexion->conectar();
    $datos = $objproducto->consultar($conexion, $_GET['id']);

    
    $nombre;
    $descripcion;
    $codigo;
    $valorunitario;

    while($dato = mysqli_fetch_array($datos)){
        $id = $dato['id'];
        $nombre = $dato['nombre'];
        $descripcion = $dato['descripcion'];
        $codigo = $dato['codigo'];
        $valorunitario=$dato['valorunitario'];
    }
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
    <!--formulario-->
    <form action="controlador/editar.php" method="post">
        <input value="<?php echo $id; ?>" type="hidden" name="id">
        <label for="">Nombre: </label> <input type="text" name="nombre" value=" <?php echo $nombre; ?>"> <br><br>
        <label for="">Descripcion: </label> <input type="text" name="descripcion" value=" <?php echo $descripcion; ?>"> <br><br>
        <label for="">COdigo: </label> <input type="text" name="codigo" value=" <?php echo $codigo; ?>"> <br><br>
       <label for=""> Valor unitario: </label> <input type="text" name="valorunitario" value=" <?php echo $valorunitario; ?>"> <br><br>
        <input type ="submit" value= "Actualizar">
        
    </form>
</body>
</html>