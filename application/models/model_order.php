<?php

class Model_order extends CI_Model{

    public function tampil_order(){
        return $this->db->get('orders');
    }

    public function tambah_order($data,$table)
    {
        $this->db->insert($table,$data);
    }

    public function pembayaran($where,$table)
    {
        return $this->db->get_where($table,$where);
    }

    //Hitung banyak data order
    public function hitungJumlahOrder(){
        $query = $this->db->get('orders');
        if ($query->num_rows()>0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

}