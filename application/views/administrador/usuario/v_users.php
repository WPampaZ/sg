 <a class="btn" href="<?php echo base_url()?>index.php/administrador/crearusuario"> <span class="fa fa-edit">
        </span> Nuevo Usuario
</a></br>
</br>     
<h3>Lista de Usuarios</h3>
<table class="table table-bordered">
  <thead>
    <th>N°</th>
    <th>Id</th>
    <th>Nommbre</th>
    <th>Apellido Paterno</th>
    <th>Apellido Materno</th>
    <th>N° DNI</th>
    <th>Login</th>
    <th>Contraseña</th>
    <th>Telefono</th>
    <th>Activo</th>
    <th>Especialidad</th>
    <th>Editar</th>
    <th>Eliminar</th>
  </thead>
  <tbody>
    <?php $no=0; foreach ($datauser->result_array() as $k) { $no++;?>
    <tr>
       <td><?php echo $no ; ?> </td>
      <td><?php echo $k['id'];?> </td> 
      <td><?php echo $k['nombre'];?> </td>
      <td><?php echo $k['ap_paterno'];?> </td>
      <td><?php echo $k['ap_materno'];?> </td>
      <td><?php echo $k['dni'];?> </td>
      <td><?php echo $k['login'];?> </td>
      <td><?php echo $k['contrasenia'];?> </td>
      <td><?php echo $k['telefono'];?> </td>  
      <td><?php echo $k['estado'];?> </td>
      <td><?php echo $k['especialidad'];  ?> </td>
      <td><a href="<?php echo base_url('index.php/administrador/editarusuario/'.$k['id'])?>" class="btn btn-success">
        <span class="fa fa-edit"></span>
        </a>
        </td>
      <td>
        <button class="btn btn-danger">
          <span class="fa fa-trash"></span>
        </button>
        </td>
    </tr>
    </tbody>
<?php } ?>
</table>