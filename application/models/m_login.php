<?php 

class M_login extends CI_Model{	
	function cek_login($username){		
		$this->db->where('username', $username);
		$result = $this->db->get('user')->row();
		return $result;
	}	
}