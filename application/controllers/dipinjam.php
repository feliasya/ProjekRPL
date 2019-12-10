<?php 

class Dipinjam extends CI_Controller{

	function index(){
		$this->load->view('v_dipinjam.php');
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}