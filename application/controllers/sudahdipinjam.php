<?php 

class Sudahdipinjam extends CI_Controller{


	function __construct(){
		parent::__construct();		
		$this->load->model('m_showpinjam');
	}

	function index(){
		$data['data_pinjam'] = $this->m_showpinjam->show_peminjaman()->result();
		$this->load->view('v_dipinjamuser.php', $data);

	}

	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}