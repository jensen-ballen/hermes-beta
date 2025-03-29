<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper bg-light">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <h1>USUARIOS</h1>
          <div class="mt-3">
            <ul class="nav nav-pills">
              <li class="nav-item"><a class="nav-link active" href="#">Pendientes <span class="badge bg-secondary">2</span></a></li>
              <li class="nav-item"><a class="nav-link" href="#">Reportes</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Líder TIC</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Alex Díaz</a></li>
            </ul>
          </div>
          
          <div class="mt-3">
            <button class="btn btn-dark"><i class="fas fa-plus"></i> Agregar usuario</button>
          </div>

          <div class="mt-3">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Buscar...">
              <div class="input-group-append">
                <button class="btn btn-dark" type="button"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div>

          <div class="mt-3">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Identificación</th>
                    <th>Nombre/Rol</th>
                    <th>Ficha</th>
                    <th>Estado</th>
                    <th>Último ingreso</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>CC123456789</td>
                    <td>
                      <div class="d-flex align-items-center">
                        <i class="fas fa-user-circle mr-2"></i>
                        <div>
                          <div>Alex Díaz</div>
                          <small class="text-muted">Senior Designer</small>
                        </div>
                      </div>
                    </td>
                    <td>2287523</td>
                    <td><span class="badge bg-success">Activo</span></td>
                    <td>11/11/2024</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-sm btn-light"><i class="fas fa-eye"></i></button>
                        <button class="btn btn-sm btn-light"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-light"><i class="fas fa-trash"></i></button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-3">
              <div>Rows per page: 
                <select class="form-control-sm">
                  <option>10</option>
                </select>
              </div>
              <div>1-3 of 3</div>
              <div class="btn-group">
                <button class="btn btn-sm btn-light"><i class="fas fa-chevron-left"></i></button>
                <button class="btn btn-sm btn-light"><i class="fas fa-chevron-right"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

    

    