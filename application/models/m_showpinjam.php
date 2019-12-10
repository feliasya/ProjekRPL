<?php 

class M_showpinjam extends CI_Model{	
	function show_peminjaman(){
		return $this->db->get('data_pinjam');
	}
}