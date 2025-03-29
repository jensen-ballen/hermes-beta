<?php

require_once "conexion.php";

class ModeloSedes
{ //Mostraramos la clase ModeloSedes
    //Mostaramos la funcion mdlMostrarSedes
    //Recibimos los parametros tabla, item y valor
    //Si el item no es nulo, preparamos la consulta para buscar un registro especifico
    //Si el item es nulo, preparamos la consulta para buscar todos los registros
    static public function mdlMostrarSedes($tabla, $item, $valor)
    {
        if ($item != null) {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
            $stmt->bindParam(":$item", $valor, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch();
        } else {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt->execute();
            return $stmt->fetchAll();
        }
        $stmt->close();
        $stmt = null;
    }
}