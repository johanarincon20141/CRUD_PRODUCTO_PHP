<?php

// instancias de otras clases   ----  el  ../  nos devuelve una carpeta
include '../clases/conexion.php';
include '../clases/producto.php';

$objConexion = new conexion();
$conexion = $objConexion->conectar();

$objproducto = new producto();

echo $objproducto->registrar($conexion, $_POST['nombre'], $_POST['descripcion'], $_POST['codigo'],$_POST['valorunitario']);

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
    <br><a href="../index.html">Volver a Menu</a>
</body>
</html>