<?php

class M_createAccount extends CI_Model{
    function input_akunBaru($data,$tabel){
        $this->db->insert('data_akun',$data);
    }
}