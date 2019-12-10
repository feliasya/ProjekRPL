<?php 

class Sudahdipinjam extends CI_Controller{


	function __construct(){
		parent::__construct();		
		$this->load->model('m_showpinjam');
	}
	function index(){
		$this->load->view('v_dipinjamuser.php');
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}