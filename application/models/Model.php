 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model{

	public function simpan($tabel,$data){
		return $this->db->insert($tabel,$data);
	}
	public function hapus($tabel,$where){
		return $this->db->delete($tabel,$where);
	}
	public function update($tabel,$data,$where){
		return $this->db->update($tabel,$data,$where);
	}

	public function getUsers($where=''){
		return $this->db->query("SELECT * FROM usuario",$where);
	}

	public function getLogin($login,$contrasenia){
		return $this->db->query("SELECT * FROM usuario WHERE login='$login' AND contrasenia='".md5($contrasenia)."'");
	}

}

?>
