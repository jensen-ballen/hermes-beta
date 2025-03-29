<?php
class ControladorUsuarios {
    private function obtenerRolUsuario($id_usuario) {
        $tabla = "usuario_rol";
        $sql = "SELECT r.id_rol 
                FROM roles r 
                INNER JOIN usuario_rol ur ON r.id_rol = ur.id_rol 
                WHERE ur.id_usuario = :id_usuario 
                LIMIT 1";
                
        try {
            $conn = Conexion::conectar();
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":id_usuario", $id_usuario, PDO::PARAM_INT);
            $stmt->execute();
            
            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
            return $resultado ? $resultado['id_rol'] : null;
            
        } catch(PDOException $e) {
            echo "Error al obtener rol: " . $e->getMessage();
            return null;
        }
    }
    public function ctrIngresoUsuario() {
        if (isset($_POST['btnIngresar'])) {
            if (isset($_POST['ingUsuario']) && isset($_POST['ingPassword'])) {
                $usuario = trim($_POST['ingUsuario']);
                $password = trim($_POST['ingPassword']);
                
                $tabla = "usuarios";
                $item = "nombre_usuario";
                $valor = $usuario;
                
                $respuesta = ModeloUsuarios::mdlMostrarUsuario($tabla, $item, $valor);

                if ($respuesta && $respuesta["nombre_usuario"] == $usuario && $respuesta["clave"] === $password) {
                    $_SESSION["iniciarSesion"] = "ok";
                    $_SESSION["id_usuario"] = $respuesta["id_usuario"];
                    $_SESSION["nombre"] = $respuesta["nombre"];
                    $_SESSION["id_rol"] = $this->obtenerRolUsuario($respuesta["id_usuario"]);
                    
                    echo "<script>
                        window.location = 'index.php?ruta=inicio';
                    </script>";
                    exit;
                } else {
                    echo "<script>
                        window.location = 'index.php?error=true';
                    </script>";
                    exit;
                }
            }
        }
    }
}