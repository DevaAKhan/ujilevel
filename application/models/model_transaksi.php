<?php

class Model_transaksi extends CI_Model{

    public function tampil_transaksi(){
        return $this->db->get('transaksi');
    }

    public function tambah_transaksi($data,$table)
    {
        $this->db->insert($table,$data);
    }

    public function edit_transaksi($where,$table)
    {
        return $this->db->get_where($table,$where);
    }

    public function update_transaksi($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_data($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    //Hitung banyak data transaksi
    public function hitungJumlahTransaksi(){
        $query = $this->db->get('transaksi');
        if ($query->num_rows()>0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

}