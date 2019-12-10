<?php 

class Peminjamansukses extends CI_Controller{

	function index(){
		$this->load->view('v_peminjamansukses.php');
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}