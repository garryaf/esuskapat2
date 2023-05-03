<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Register extends CI_Controller {
	 
//	function __construct(){
//		parent::__construct();
//		$this->load->library(array('form_validation'));
//		$this->load->helper(array('url','form'));
//		$this->load->model('m_account'); //call model
//	}
public function __construct() 
{
	parent::__construct();
	$this->load->model('M_Register');
}    

public function input() {
//	$data = array();
//	$data['get_level']=$this->Register_model->get_all_level();
	$this->load->view('account/v_register'); //$data);
}

//	public function index() {
 
//		$this->form_validation->set_rules('name', 'NAME','required');
//		$this->form_validation->set_rules('username', 'USERNAME','required');
//		$this->form_validation->set_rules('email','EMAIL','required|valid_email');
//		$this->form_validation->set_rules('password','PASSWORD','required');
//		$this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
//		if($this->form_validation->run() == FALSE) {
//			$this->load->view('account/v_register');
//		}else{
 
//			$data['nama']   =    $this->input->post('name');
//			$data['username'] =    $this->input->post('username');
//			$data['email']  =    $this->input->post('email');
//			$data['password'] =    md5($this->input->post('password'));
 
//			$this->m_account->daftar($data);
			 
//			$pesan['message'] =    "Pendaftaran berhasil";
			 
//			$this->load->view('account/v_success',$pesan);
public function simpan() 
{

	$data = array();
	$data['nama'] = $this->input->post('nama');
	$data['username'] = $this->input->post('username');
	$data['password'] = MD5($this->input->post('password'));
	$data['level_id'] = $this->input->post('level_id');
	$data['create_at'] = date('Y-m-d H:i:s');
	$data['update_at'] = date('Y-m-d H:i:s');
	$data['last_login'] = date('Y-m-d H:i:s');

	//$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
	//$this->form_validation->set_rules('username', 'Username', 'trim|required');
	//$this->form_validation->set_rules('password', 'password', 'trim|required');
	//$this->form_validation->set_rules('level_id', 'level', 'trim|required');

	if ($password != $retype_password) {
        echo "Password tidak sesuai";
        return;
    }
	 $data = array(
        'nama' => $nama,
        'email' => $email,
        'username' => $username,
        'password' => password_hash($password, PASSWORD_DEFAULT),
        'create_at' => date('Y-m-d H:i:s'),
        'update_at' => date('Y-m-d H:i:s')
    );

    $this->M_Register->simpan($data);

    echo "Data user berhasil disimpan";

  }
 }

