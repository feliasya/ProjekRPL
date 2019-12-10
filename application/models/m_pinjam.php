<?php 

class M_pinjam extends CI_Model{	
	function input_peminjaman($data,$tabel){
        $this->db->insert('data_pinjam',$data);
    }
}