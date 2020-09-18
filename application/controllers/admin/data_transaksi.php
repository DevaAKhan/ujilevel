<?php 

class Data_transaksi extends CI_Controller{
    public function index()
    {
        $data['transaksi'] = $this->model_transaksi->tampil_transaksi()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_transaksi', $data);
        $this->load->view('templates_admin/footer');
    }
    
    public function hapus($id_transaksi)
    {
        $where = array('id_transaksi'=>$id_transaksi);
        $this->model_transaksi->hapus_data($where,'transaksi');
        redirect('admin/data_transaksi/index');
    }
}