<?php
include '../clases/conexion.php';
include '../clases/producto.php';

$objConexion = new conexion();
$objproducto = new producto();

$conexion = $objConexion->conectar();


echo $objproducto->editar($conexion, $_POST['nombre'], $_POST['descripcion'], 
$_POST['codigo'], $_POST['valorunitario'],$_POST['id']);

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
<br><br> <a href="../consultar.php">Ir a consultar</a>
</body>
</html>