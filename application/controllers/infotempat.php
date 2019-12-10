<?php 

class Infotempat extends CI_Controller{

	function index(){
		$this->load->view('v_infotempat.php');
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}