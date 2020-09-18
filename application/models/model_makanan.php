<?php

class Model_makanan extends CI_Model{

    public function tampil_data(){
        return $this->db->get('makanan');
    }

    public function tambah_makanan($data,$table)
    {
        $this->db->insert($table,$data);
    }

    public function edit_makanan($where,$table)
    {
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_data($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function find($id_makanan)
    {
        $result = $this->db->where('id_makanan',$id_makanan)->limit(1)->get('makanan');
                           
        if ($result->num_rows() > 0) {
            return $result->row();
        }else{
            return array();
        }
    }

    public function detail_makanan($id_makanan)
    {
        $result = $this->db->where('id_makanan',$id_makanan)->get('makanan');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    //Hitung banyak data menu
    public function hitungJumlahMenu(){
        $query = $this->db->get('makanan');
        if ($query->num_rows()>0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function get_makanan(){
        $data = $this->db->get('makanan');
        return $data->result();
    }

    public function count_makanan(){
        $data = $this->db->get('makanan');
        return $data->num_rows();
    }
}