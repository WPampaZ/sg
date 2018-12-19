<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Administrador extends  CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->ceklogin();
	}

	private function ceklogin()
	{
		$id = $this->session->userdata('id');
		$status = $this->session->userdata('status');
		if($id == null OR $status != 'ok'){
			redirect("auth");
		}
	}
	public function index()
	{	$data = array(
		'title'=>'Usuario',
		'title_level'=>'Data Usuario',
		'title_level2'=>'',
		'datauser'=>$this->model->getUsers(),
		'Konten'=>'administrador/usuario/v_users',
		//'Konten'=>'auth/register',
		);
		$this->load->view('administrador/template',$data);
	}

	public function crearusuario()
	{	$data = array(
		'title'=>'Usuario',
		'title_level'=>'Data Usuario',
		'title_level2'=>'Crear Usuario',
		//'datauser'=>$this->model->getUsers(),
		'Konten'=>'administrador/usuario/v_crearusuario',
		//'Konten'=>'auth/register',
		);
		$this->load->view('administrador/template',$data);
	}

	public function guardarusuario()
	{	if(!S_POST['simpan']){
			redirect('administrador');
		}
		$nombre=$this->input->post('nombre');
		$ap_paterno=$this->input->post('apellidopaterno');
		$ap_materno=$this->input->post('apellidomaterno');
		$dni=$this->input->post('dni');
		$telefono=$this->input->post('telefono');
		$especialidad=$this->input->post('especialidad');
		
		$login=$this->input->post('login');
		$contrasenia=$this->input->post('contrasenia');
		$recontrasenia=$this->input->post('recontrasenia');

		if($contrasenia!=$recontrasenia){
			echo "<script> alert('La contraseña no es igual')</script>";
			$this->crearusuario();
		}else{
			$data=array(
				'nombre'=>$nombre,
				'ap_paterno'=>$ap_paterno,
				'ap_materno'=>$ap_materno,
				'dni'=>$dni,
				'login'=>$login,
				'contrasenia'=>md5($contrasenia),
				'telefono'=>$telefono,
				'especialidad'=>$especialidad);
				
			$result=$this->model->simpan('usuario',$data);
				if($result == 1){
					echo "<script> alert('Datos guardados con éxito')</script>";
					$this->index();

				}else{
					echo "<script>alert('Datos no pudieron guardar')</script>";
					$this->crearusuario();
				}
		}
	}
	public function editarusuario($kode=0)
	{	if($this->uri->segment(3)==null){
			echo "<script> alert('no se tiene ID ".$kode." ')</script>";
			$this->index(); 
		}
		echo "<script> alert('Su id es: ".$kode." ')</script>";
		$usuario = $this->model->getusers("WHERE id='$kode';")->row_array();
		echo "<script> alert('".$kode."')</script>";
		$data = array(
		'title'=>'Usuario',
		'title_level'=>'Data Usuario',
		'title_level2'=>'Editar Usuario',
		'id'=>$usuario['id'],
		'nombre'=>$usuario['nombre'],
		'apellidopaterno'=>$usuario['ap_paterno'],
		'apellidomaterno'=>$usuario['ap_materno'],
		'dni'=>$usuario['dni'],
		'login'=>$usuario['login'],
		//'contrasenia'=>$users['contrasenia'],
		'telefono'=>$usuario['telefono'],
		//'estado'=>$users['id'],
		'especialidad'=>$usuario['especialidad'],
		'Konten'=>'administrador/usuario/v_editarusuario',
		//'Konten'=>'auth/register',
		);
		// echo "<script> alert('final ID: ".$users['id']." ')</script>";
		$this->load->view('administrador/template',$data);
	}
	public function actualizarusuario()
	{	/*if(!S_POST['actualizarusuario'])
		{
			redirect('administrador');
		}*/
		$id=$this->input->post('id');
		$nombre=$this->input->post('nombre');
		$ap_paterno=$this->input->post('apellidopaterno');
		$ap_materno=$this->input->post('apellidomaterno');
		$dni=$this->input->post('dni');
		$telefono=$this->input->post('telefono');
		$especialidad=$this->input->post('especialidad');
		
		$login=$this->input->post('login');
		//$contrasenia=$this->input->post('contrasenia');
	//	$recontrasenia=$this->input->post('recontrasenia');

	//	if($contrasenia!=$recontrasenia){
	//		echo "<script> alert('La contraseña no es igual')</script>";
		//	$this->crearusuario();
	//	}else{
			$data=array(
				'nombre'=>$nombre,
				'ap_paterno'=>$ap_paterno,
				'ap_materno'=>$ap_materno,
				'dni'=>$dni,
				'login'=>$login,
				//'contrasenia'=>$contrasenia,
				'telefono'=>$telefono,
				'especialidad'=>$especialidad);
				
			$result=$this->model->update('usuario',$data,array('id'=>$id));
				if($result == 1){
					echo $id;
					echo " <script> alert('Datos guardados con éxito')</script>";
					$this->index();

				}else{
					echo "<script>alert('Datos no pudieron guardar')</script>";
					$this->editarusuario();
				}
		//}
	}
}

?>