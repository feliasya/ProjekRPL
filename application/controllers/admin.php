<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->load->view('v_admin');
	}

	function tampil_nama_user(){
		$getterNama = $this->session->userdata('nama');

	}
}