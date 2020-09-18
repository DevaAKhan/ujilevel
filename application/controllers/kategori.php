<?php

class Kategori extends CI_Controller{
    public function makan()
    {
        $data['makan'] = $this->model_kategori->data_makan()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('makanan',$data);
        $this->load->view('templates/footer');
    }

    public function minum()
    {
        $data['minum'] = $this->model_kategori->data_minum()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('minuman',$data);
        $this->load->view('templates/footer');
    }
}

?>