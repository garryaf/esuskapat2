<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Register extends CI_Controller {
	 

public function __construct() 
{
	parent::__construct();
	$this->load->model('M_Register');
}    

public function index() 
{
	$this->load->view('account/v_register');
}


public function proses() 
 {
	$this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[tb_user.email]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');
    $this->form_validation->set_rules('retype_password', 'Retype Password', 'trim|required|matches[password]');
    $this->form_validation->set_rules('level_id', 'Level', 'trim|required');

    if ($this->form_validation->run() == true) {
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->M_Register->register($username, $email, $password);
        $this->session->set_flashdata('success_register', 'Proses Pendaftaran User Berhasil');
        redirect('login');
    } else {
        $this->session->set_flashdata('error', validation_errors());
        redirect('register');
    }
 }
}




