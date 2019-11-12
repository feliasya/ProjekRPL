<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
	}

	function index(){
		if($this->session->userdata('status_login'))
      		redirect('admin');
      	$this->load->view('v_login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$user = $this->m_login->cek_login($username);
		if(empty($user)){
			$this->session->set_flashdata('message', 'Username tidak ditemukan');
     		 redirect('login');
		}else{
			if($password == $user->password){
				$data_session = array(
				'nama' => $username,
				'status_login' => true
				);
				$this->session->set_userdata($data_session);
				redirect('admin');
			}else{
				$this->session->set_flashdata('message', 'Password salah');
        		redirect('login');
			}
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}