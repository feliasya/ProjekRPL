<?php 

class Pinjam extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_pinjam');	
	}

	function index(){
		$this->load->view('v_pinjam');
	}

	function aksi_peminjaman(){
		$nama = $this->input->get('NamaPeminjam');
		$npm = $this->input->get('NPMPeminjam');
		$fakultas = $this->input->get('Fakultas_Peminjam');
		$jurusan = $this->input->get('Jurusan_Peminjam');
		$instansi = $this->input->get('Instansi_Peminjam');
		$tempat = $this->input->get('Tempat_Pinjam');
		$nama_acara = $this->input->get('Acara');
		$tanggal_mulai = $this->input->get('tanggal_mulai');
		$tanggal_selesai = $this->input->get('tanggal_selesai');
		$jam_mulai = $this->input->get('jam_mulai');
		$jam_selesai = $this->input->get('jam_selesai');

		$data = array (
			'nama_peminjam' => $nama,
			'npm_peminjam' => $npm,
			'fakultas_peminjam' => $fakultas,
			'jurusan_peminjam' => $jurusan,
			'instansi_peminjam' => $instansi,
			'pinjam_ruangan' => $tempat,
			'nama_acara' => $nama_acara,
			'tanggal_mulai' => $tanggal_mulai,
			'tanggal_selesai' => $tanggal_selesai,
			'jam_mulai' => $jam_mulai,
			'jam_selesai' => $jam_selesai
		);
		$this->m_pinjam->input_peminjaman($data,'data_peminjaman');
		redirect('peminjaman_sukses');
		}

	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}