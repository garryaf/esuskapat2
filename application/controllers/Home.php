<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Home extends CI_Controller {
 
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Register');
		$this->auth->cek_login();
	}
 
	public function index()
	{
		$this->load->view('v_home');
	}
}
?>