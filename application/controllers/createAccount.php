<?php 

class CreateAccount extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_createAccount');
	}

	function index(){
      	$this->load->view('v_createAccount');
	}

	function aksi_akunBaru(){
		$namaLengkap = $this->input->post('inputNama');
		$nomorHP = $this->input->post('inputHP');
		$alamatEmail = $this->input->post('inputEmail');
		$userFakultas = $this->input->post('inputFakultas');
		$userJurusan = $this->input->post('inputJurusan');
		$userNPM = $this->input->post('inputNPM');
		$userAngkatan = $this->input->post('inputAngkatan');
		$inputUsername = $this->input->post('inputUname');
		$inputPassword = $this->input->post('inputPw');

		$data = array (
			'user_nama' => $namaLengkap,
			'nomor_hp' => $nomorHP,
			'email' => $alamatEmail,
			'user_fakultas' => $userFakultas,
			'user_jurusan' => $userJurusan,
			'npm' => $userNPM,
			'angkatan' => $userAngkatan,
			'username' => $inputUsername,
			'password' => $inputPassword
		);
		$this->m_createAccount->input_akunBaru($data,'data_akun');
		redirect('buatAkun_sukses');
		}
	}

	function cancel(){
		redirect('login');
	}
