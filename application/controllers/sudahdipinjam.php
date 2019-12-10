<?php 

class Sudahdipinjam extends CI_Controller{

	function index(){
		$this->load->view('v_dipinjamuser.php');
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}