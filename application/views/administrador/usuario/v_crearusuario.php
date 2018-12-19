<form action="<?php echo base_url()?>index.php/administrador/guardarusuario" method="post">
      <div class="form-group has-feedback">
        <label>Nombres</label></br>
        <input type="text" name="nombre" class="form-control" placeholder="Nombres">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
         <label>Apellido Paterno</label></br>
        <input type="text" name="apellidopaterno" class="form-control" placeholder="Apellido Paterno">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>Apellido Materno</label></br>
        <input type="text" name="apellidomaterno" class="form-control" placeholder="Apellido Materno">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      
      <div class="form-group has-feedback">
        <label>Numero de DNI</label></br>
        <input type="text" name="dni" class="form-control" placeholder="Numero de DNI">
        <span class="glyphicon glyphicon-modal-window form-control-feedback"></span>
      </div>
      
      <div class="form-group has-feedback">
        <label>Numero de Telefono/Celular</label></br>
        <input type="text" name="telefono" class="form-control" placeholder="Numero de Telefono/Celular">
        <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>Carrera Profesional/ Especialidad</label></br>
        <input type="text" name="especialidad" class="form-control" placeholder="Carrera Profesional/ Especialidad">
        <span class="glyphicon glyphicon-education form-control-feedback"></span>
      </div>
      

      <div class="form-group has-feedback">
        <label>Usuario</label></br>
        <input type="text" name="login" class="form-control" placeholder="login">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      ><div class="form-group has-feedback">
        <label>Contraseña</label></br>
        <input type="password" name="contrasenia" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>vuelva a ingresar la contraseña</label></br>
        <input type="password" name="recontrasenia" class="form-control" placeholder="Retype password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <!---<label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label> -->
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="simpan" value="simpan" class="btn btn-primary btn-block btn-flat">Guardar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>