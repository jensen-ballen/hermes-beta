<div class="login-box d-flex flex-column justify-content-center align-items-center" style="height: 100vh; width: auto; margin: 0 auto;">

  <div class="login-logo text-center mb-3">
    <a href="#">HERMES</a>
  </div>

  <div class="card" style="width: 100%; max-width: 400px;">

    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña" name="ingpassword">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">Recuerdame</label>
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">INGRESAR</button>
          </div>
        </div>
        <?php
            $login = new ControladorUsuarios();
            $login->ctrIngresoUsuario();
        ?>
      </form>
      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
    </div>
  </div>
</div>
