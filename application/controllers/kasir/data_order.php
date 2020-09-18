<?php 

class Data_order extends CI_Controller{
    public function index()
    {
        $data['orders'] = $this->model_order->tampil_order()->result();
        $this->load->view('templates_kasir/header');
        $this->load->view('templates_kasir/sidebar');
        $this->load->view('kasir/data_order', $data);
        $this->load->view('templates_kasir/footer');
    }

    public function bayar($id_order)
    {
        $where = array('id_order'=>$id_order);
        $data['orders'] = $this->model_order->pembayaran($where,'orders')->result();
        $this->load->view('templates_kasir/header');
        $this->load->view('templates_kasir/sidebar');
        $this->load->view('kasir/pembayaran', $data);
        $this->load->view('templates_kasir/footer');
    }
}
?>