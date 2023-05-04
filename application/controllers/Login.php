<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class Login extends CI_Controller {
    function __construct()
	{
		parent::__construct();
		$this->load->model('M_Register');
	}

    public function index() 
    {
		$this->load->view('account/v_login');
	}
    public function proses()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($this->M_Regoster->login_user($username,$password))
		{
			redirect('home');
		}
		else
		{
			$this->session->set_flashdata('error','Username & Password salah');
			redirect('login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('is_login');
		redirect('login');
	}
             
}  
