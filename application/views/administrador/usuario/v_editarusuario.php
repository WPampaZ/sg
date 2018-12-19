<form action="<?php echo base_url()?>index.php/administrador/actualizarusuario" method="post">
  <input type="hidden" name ="id" value="<?php echo $id ?>">
      <div class="form-group has-feedback">
        <label>Nombres</label></br>
        <input type="text" name="nombre" class="form-control" placeholder="Nombres" value="<?php ;echo $nombre ?>">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
         <label>Apellido Paterno</label></br>
        <input type="text" name="apellidopaterno" class="form-control" placeholder="Apellido Paterno" value="<?php echo $apellidopaterno ?>">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>Apellido Materno</label></br>
        <input type="text" name="apellidomaterno" class="form-control" placeholder="Apellido Materno"value="<?php echo $apellidomaterno ?>">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      
      <div class="form-group has-feedback">
        <label>Numero de DNI</label></br>
        <input type="text" name="dni" class="form-control" placeholder="Numero de DNI" value="<?php echo $dni ?>">
        <span class="glyphicon glyphicon-modal-window form-control-feedback"></span>
      </div>
      
      <div class="form-group has-feedback">
        <label>Numero de Telefono/Celular</label></br>
        <input type="text" name="telefono" class="form-control" placeholder="Numero de Telefono/Celular" value="<?php echo $telefono ?>">
        <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>Carrera Profesional/ Especialidad</label></br>
        <input type="text" name="especialidad" class="form-control" placeholder="Carrera Profesional/ Especialidad" value="<?php echo $especialidad ?>">
        <span class="glyphicon glyphicon-education form-control-feedback"></span>
      </div>
      

      <div class="form-group has-feedback">
        <label>Usuario</label></br>
        <input type="text" name="login" class="form-control" placeholder="login" value="<?php echo $login ?>">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
<!--

      <div class="form-group has-feedback">
        <label>Contraseña</label></br>
        <input type="password" name="contrasenia" class="form-control" placeholder="Password" value="<?php echo $contrasenia ?>">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>vuelva a ingresar la contraseña</label></br>
        <input type="password" name="recontrasenia" class="form-control" placeholder="Retype password" value="<?php echo $recontrasenia ?>">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>

    -->
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
          <button type="submit" name="actulizarusuario" class="btn btn-primary btn-block btn-flat" value="actualizarusuario">Guardar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>