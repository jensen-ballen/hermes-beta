<?php
//Mostaramos la clase ControladorSedes
require_once "Modelos/sedes.modelo.php";  // Agregar esta línea al inicio del archivo

class ControladorSedes
{
   static public function ctrMostrarSedes($item, $valor)
   {
      $tabla = "sedes";
      $respuesta = ModeloSedes::mdlMostrarSedes($tabla, $item, $valor);
      return $respuesta;
   }

}