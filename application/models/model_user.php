<?php

class Model_user extends CI_Model{

    public function tampil_user(){
        return $this->db->get('users');
    }

    public function hapus_data($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    //Hitung banyak data user
    public function hitungJumlahUser(){
        $query = $this->db->get('users');
        if ($query->num_rows()>0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

}