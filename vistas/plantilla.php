<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HERMES JENSEN</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="vistas/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="vistas/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="vistas/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="vistas/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/adminlte.min.css">
</head>
<!-- jQuery -->
<script src="vistas/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<link rel="stylesheet" href="vistas/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="vistas/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<script src="vistas/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="vistas/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="vistas/plugins/jszip/jszip.min.js"></script>
<script src="vistas/plugins/pdfmake/pdfmake.min.js"></script>
<script src="vistas/plugins/pdfmake/vfs_fonts.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="vistas/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes 
<script src="vistas/dist/js/demo.js"></script>-->

<body class="<?php echo (!isset($_SESSION["iniciarSesion"]) ? 'hold-transition login-page' : 'hold-transition sidebar-mini'); ?>">

<?php
if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") {
    echo '<div class="wrapper">';
    include "modulos/cabezote.php";
    include "modulos/menu.php";

    if (isset($_GET["ruta"])) {
        if ($_GET["ruta"] == "inicio" ||
            $_GET["ruta"] == "usuarios" ||
            $_GET["ruta"] == "permisos" ||
            $_GET["ruta"] == "inventario" ||
            $_GET["ruta"] == "recepcion" ||
            $_GET["ruta"] == "reservas" ||
            $_GET["ruta"] == "inmediatas" ||
            $_GET["ruta"] == "autorizaciones" ||
            $_GET["ruta"] == "vencidas" ||
            $_GET["ruta"] == "devoluciones" ||
            $_GET["ruta"] == "salidas" ||
            $_GET["ruta"] == "reportes" ||
            $_GET["ruta"] == "salir" ||
            $_GET["ruta"] == "sedes" ||
            $_GET["ruta"] == "fichas" ||
            $_GET["ruta"] == "olvido_password") {
            include "modulos/".$_GET["ruta"].".php";
        } else {
            include "modulos/error404.php";
        }
    }

    include "modulos/footer.php";
    echo '</div>';
} else {
    include "modulos/login.php";
    
}
?>
<script src="vistas/js/plantilla.js"></script>
</body>
</html>
