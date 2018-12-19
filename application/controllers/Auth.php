<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('auth/login');
	}
	public function register()
	{
		$this->load->view('auth/register');
	}
	public function reg_action()
	{
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
			echo "<script> alert('Los contraseña no coencide')</script>";
			$this->register();
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
				if($result > 0){
					echo "<script> alert('Datos guardados con éxito')</script>";

				}else{
					echo "<script> alert(Datos no pudieron guardar')</script>";
				}
		}
	}

	public function login_action(){
		$login=$this->input->post('login');
		$contrasenia=$this->input->post('contrasenia');		
		$check_login_r=$this->model->getLogin($login,$contrasenia)->num_rows();
		if($check_login_r>0){
			$datauser=$this->model->getlogin($login,$contrasenia)->row_array();
			$sessions = array(
				'id'=>$datauser['id'],
				'login'=>$datauser['login'],
				'nombre'=>$datauser['nombre'],
				'status'=>'ok',
			);
			$this->session->set_userdata($sessions);
			redirect("administrador");
		}else{
			echo "<script> alert('Los Datos ingresados no son correctos')</script>";
			$this->index();
		}

	}

	public function logout_action(){
		$this->session->sess_destroy();
		redirect('auth');
	}
}
