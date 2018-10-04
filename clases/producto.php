<?php

class producto{

    // Metodo registrar ---  crear - (INSERT INTO)

    public function registrar($conexion, $nombre, $descripcion, $codigo, $valorunitario){
        $query = "INSERT INTO producto (nombre,descripcion, codigo, valorunitario) VALUES ('$nombre', '$descripcion', $codigo,'$valorunitario')";
        $consulta = mysqli_query($conexion, $query);

        if($consulta){
            $respuesta = "producto  registrado";
        }else{
            $respuesta = "Problemas al registrar producto ".mysqli_error($conexion);  
        }
        return $respuesta;
    }
        //Funcion para consultar
    public function consultar($conexion){
        $query = "SELECT * FROM producto";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }
        //Funcion para consultar
    public function productoId($conexion, $id){
        $query = "SELECT * FROM producto WHERE id = $id";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }
        //Funcion para editar

    public function editar($conexion, $nombre, $descripcion, $codigo, $valorunitario, $id){
        $query = "UPDATE producto SET nombre = '$nombre', descripcion = '$descripcion', 
        codigo = '$codigo', valorunitario = '$valorunitario' WHERE id = '$id'";
       
       $consulta = mysqli_query($conexion, $query);
        if($consulta){

            $respuesta = "Actualizado con exito";
        }else{
            $respuesta = "Problemas al actualizar";
        }
        return $respuesta;
    }
        //Funcion para eliminar
    public function eliminar($conexion, $id){
        $query = "DELETE FROM producto WHERE id = $id;";
        $consulta = mysqli_query($conexion, $query);
        if($consulta){
            $respuesta = "producto eliminado";
        }else{
            $respuesta = "No fue posible eliminar ";
        }
        return $respuesta;
    }
        //  .mysqli_error($conexion)  <----  nos muestra donde esta el error
}