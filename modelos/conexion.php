<?php
class Conexion {
    static public function conectar() {
        try {
            $link = new PDO('mysql:host=localhost;dbname=bdhermes', 'root', '');
            $link->exec("set names utf8");
            return $link;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }

    }
}
?>
