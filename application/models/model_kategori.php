<?php

class Model_kategori extends CI_Model{
    public function data_makan()
    {
        return $this->db->get_where("makanan",array('kategori'=>'makanan'));
    }

    public function data_minum()
    {
        return $this->db->get_where("makanan",array('kategori'=>'minuman'));
    }
}
?>