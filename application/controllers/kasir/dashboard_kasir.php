<?php 

class Dashboard_kasir extends CI_Controller{
    public function __construct(){
        parent::__construct();

        if ($this->session->userdata('id_level') != '3') {
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> Anda Belum Login <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('auth/login');
        }
    }

    public function index()
    {
        $data['total_order'] = $this->model_order->hitungJumlahOrder();
        $data['total_transaksi'] = $this->model_transaksi->hitungJumlahTransaksi();
        $this->load->view('templates_kasir/header');
        $this->load->view('templates_kasir/sidebar');
        $this->load->view('kasir/dashboard', $data);
        $this->load->view('templates_kasir/footer');
    }
    
}