<!-- Main Sidebar Container -->
<nav class="main-sidebar sidebar-dark elevation-4" style="height: 100vh; position: fixed; overflow-y: auto; background-color: #000000;">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2" style="color: #ffffff;">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item" style="width: 100%;">
                    <div style="display: flex; align-items: center; padding: 10px;">
                        <img src="vistas/img/logo.png" alt="logo"
                        style="height: 40px; width: 40px; border-radius: 50%; margin-right: 10px;">
                        <p style="color: #ffffff; margin: 0;">HERMES</p>
                    </div>
                    <div style="display: flex; align-items: center; padding: 10px;">
                        <img src="vistas/img/albert.jpg" alt="Albert"
                        style="height: 40px; width: 40px; border-radius: 50%; margin-right: 10px;">
                        <p style="color: #ffffff; margin: 0;">Alex Díaz</p>
                    </div>
                    
                    <a href="index.php?ruta=inicio" class="nav-link">
                        <i class="fas fa-home"></i>
                        <p>Inicio</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Administrador
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?ruta=sedes" class="nav-link">
                                <i class="fas fa-user nav-icon"></i>
                                <p>Sede</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?ruta=fichas" class="nav-link">
                                <i class="fas fa-lock nav-icon"></i>
                                <p>Fichas</p>
                            </a>
                        </li>
                    </ul>
                </li>    
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Usuarios
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?ruta=usuarios" class="nav-link">
                                <i class="fas fa-user nav-icon"></i>
                                <p>Usuarios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?ruta=permisos" class="nav-link">
                                <i class="fas fa-lock nav-icon"></i>
                                <p>Permisos</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>
                            Equipos
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?ruta=inventario" class="nav-link">
                                <i class="fas fa-box-open"></i>
                                <p>Inventario</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?ruta=recepcion" class="nav-link">
                                <i class="fas fa-concierge-bell"></i>
                                <p>Recepcion/Traspaso</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                            Solicitudes
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?ruta=reservas" class="nav-link">
                                <i class="fas fa-user nav-icon"></i>
                                <p>Reservas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?ruta=inmediatas" class="nav-link">
                                <i class="fas fa-lock nav-icon"></i>
                                <p>Inmediatas</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-check"></i>
                        <p>
                            Autorizar
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?ruta=autorizaciones" class="nav-link">
                                <i class="fas fa-user nav-icon"></i>
                                <p>Autorizaciones</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?ruta=vencidas" class="nav-link">
                                <i class="fas fa-exclamation-circle"></i>
                                <p>Solicitudes vencidas</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="index.php?ruta=devoluciones" class="nav-link">
                        <i class="fas fa-lock nav-icon"></i>
                        <p>Devoluciones</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?ruta=salidas" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Salidas</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?ruta=reportes" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Reportes</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</nav>
