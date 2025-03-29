<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sedes</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <button class="btn btn-info" data-toggle="modal" data-target="#archivoModal">Añadir Sede</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Listado de Sedes</h3>
            </div>

            <div class="card-body">
                <table id="tblSedes" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Dirección</th>
                            <th>Descripción</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Aquí puedes agregar un bucle para mostrar las sedes desde la base de datos
                        $item = null;
                        $valor = null;
                        $sedes = ControladorSedes::ctrMostrarSedes($item, $valor);
                        // sede esta en la tabla
                        foreach ($sedes as $key => $value) {
                            echo '<tr>';
                            echo '<td>' . $value["id_sede"] . '</td>';  // Corregido: cambiado de $value{"id_sede"} a $value["id_sede"]
                            echo '<td>' . $value["nombre_sede"] . '</td>';
                            echo '<td>' . $value["direccion"] . '</td>';
                            echo '<td>' . $value["descripcion"] . '</td>';
                            echo '<td><span class="badge badge-' . ($value["estado"] == 1 ? 'success' : 'danger') . '">' . ($value["estado"] == 1 ? 'Activo' : 'Inactivo') . '</span></td>';
                            echo '<td>';
                            if ($value["estado"] == "activa") {
                                echo '<button class="btn btn-default btn-editar" data-toggle="modal" data-target="#editarModal"><i class="fas fa-edit"></i></button>';
                            } else {
                                echo '<button class="btn btn-default btn-editar" data-toggle="modal" data-target="#editarModal"><i class="fas fa-edit"></i></button>';
                            }
                            echo '</td>';
                            echo '</tr>';
                        }

                        ?>
                        <!-- Ejemplo que no se encuentran en la base datos -->
                        <tr>
                            <td>6</td>
                            <td>Sede Buenaventura</td>
                            <td>Av. Principal 123, Ciudad</td>
                            <td>Oficinas administrativas y de operaciones.</td>
                            <td><span class="badge badge-success">Activo</span></td>
                            <td>
                                <button class="btn btn-default btn-editar" data-toggle="modal" data-target="#editarModal">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Sucursal Palmira</td>
                            <td>Calle Norte 456, Ciudad</td>
                            <td>Centro de distribución y ventas.</td>
                            <td><span class="badge badge-danger">Inactivo</span></td>
                            <td>
                                <button class="btn btn-default btn-editar" data-toggle="modal" data-target="#editarModal">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Sucursal Cali</td>
                            <td>Avenida Sur 789, Ciudad</td>
                            <td>Atención al cliente y ventas.</td>
                            <td><span class="badge badge-success">Activo</span></td>
                            <td>
                                <button class="btn btn-default btn-editar" data-toggle="modal" data-target="#editarModal">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Sucursal Cartagena</td>
                            <td>Boulevard Este 321, Ciudad</td>
                            <td>Soporte técnico y logística.</td>
                            <td><span class="badge badge-success">Activo</span></td>
                            <td>
                                <button class="btn btn-default btn-editar" data-toggle="modal" data-target="#editarModal">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Sucursal Buga</td>
                            <td>Calle Oeste 654, Ciudad</td>
                            <td>Centro de atención a proveedores.</td>
                            <td><span class="badge badge-danger">Inactivo</span></td>
                            <td>
                                <button class="btn btn-default btn-editar" data-toggle="modal" data-target="#editarModal">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Sucursal Armenia</td>
                            <td>Plaza Central 987, Ciudad</td>
                            <td>Departamento de marketing y publicidad.</td>
                            <td><span class="badge badge-success">Activo</span></td>
                            <td>
                                <button class="btn btn-default btn-editar" data-toggle="modal" data-target="#editarModal">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Sucursal Risaralda</td>
                            <td>Parque Industrial 321, Ciudad</td>
                            <td>Fábrica y centro de producción.</td>
                            <td><span class="badge badge-danger">Activo</span></td>
                            <td>
                                <button class="btn btn-default btn-editar" data-toggle="modal" data-target="#editarModal">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>Sagrado Tuluá</td>
                            <td>CARRERA 25 # 24-47</td>
                            <td>Analisis y Desarrollo de Software</td>
                            <td><span class="badge badge-success">Activo</span></td>
                            <td>
                                <button class="btn btn-default btn-editar" data-toggle="modal" data-target="#editarModal">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </td>
                        </tr>
                        <!-- El ☝fin de los datos que no se encuentran en la base datos-->
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
</div>

<!-- Modal para agregar nueva sede -->
<div class="modal fade" id="archivoModal" tabindex="-1" role="dialog" aria-labelledby="archivoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="archivoModalLabel">Agregar Nueva Sede</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="nombreSede">Nombre</label>
                        <input type="text" class="form-control" id="nombreSede" placeholder="Ingrese el nombre">
                    </div>
                    <div class="form-group">
                        <label for="direccionSede">Dirección</label>
                        <input type="text" class="form-control" id="direccionSede" placeholder="Ingrese la dirección">
                    </div>
                    <div class="form-group">
                        <label for="descripcionSede">Descripción</label>
                        <textarea class="form-control" id="descripcionSede" rows="3" placeholder="Ingrese una descripción"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer d-flex justify-content-start">
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal para editar sede -->
 <div class="modal fade" id="editarModal" tabindex="-1" role="dialog" aria-labelledby="editarModallabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarModallabel">Editar Sede</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="nombreSede">Nombre</label>
                        <input type="text" class="form-control" id="editarNombreSede">
                    </div>
                    <div class="form-group">
                        <label for="direccionSede">Dirección</label>
                        <input type="text" class="form-control" id="editarDireccionSede">
                    </div>
                    <div class="form-group">
                        <label for="descripcionSede">Descripción</label>
                        <textarea class="form-control" id="editarDescripcionSede" rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer d-flex justify-content-start">
                <button type="button" class="btn btn-primary">Actualizar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal para editar en acciones -->
<div class="modal fade" id="editarModal" tabindex="-1" role="dialog" aria-labelledby="editarModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarModalLabel">Editar Sede</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="editarNombreSede">Nombre</label>
                            <input type="text" class="form-control" id="editarNombreSede">
                        </div>
                        <div class="form-group">
                            <label for="editarDireccionSede">Dirección</label>
                            <input type="text" class="form-control" id="editarDireccionSede">
                        </div>
                        <div class="form-group">
                            <label for="editarDescripcionSede">Descripción</label>
                            <textarea class="form-control" id="editarDescripcionSede" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer d-flex justify-content-start">
                    <button type="button" class="btn btn-primary">Actualizar</button>
                </div>
            </div>
        </div>
    </div>
</div>