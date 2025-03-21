<?php

class ControladorUsuarios{

    public function ctrIngresoUsuario(){

        if (isset($_POST["ingUsuario"])){
            if (isset($_POST["ingUsuario"])){
                if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) && preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])) {
                    $tabla = "usuario";
                    $item = "usuario";
                    $valor = $_POST["ingUsuario"];
                    
                    $respuesta = ModeloUsuarios::mdlIngresoUsuario($tabla, $item, $valor);
            
                    var_dump($respuesta["clave"]);
            
                    if($respuesta["usuario"] == $_POST["ingUsuario"] && $respuesta["clave"] == $_POST["ingPassword"]){
                        $_SESSION["iniciarSesion"] = "ok";
                        echo '<script>
                        alert("Bienvenido");
                        window.location = "index.php?ruta=inicio";
                        </script>';
                    } else {
                        echo '<script>
                        alert("Error de usuario o contraseña");
                        window.location = "index.php?ruta=login";
                        </script>';
                    }
                }
            }
        }
    }
}