<?php 

class Data_transaksi extends CI_Controller{
    public function index()
    {
        $data['transaksi'] = $this->model_transaksi->tampil_transaksi()->result();
        $this->load->view('templates_kasir/header');
        $this->load->view('templates_kasir/sidebar');
        $this->load->view('kasir/data_transaksi', $data);
        $this->load->view('templates_kasir/footer');
    }
    
    public function simpan_transaksi()
    {
        $id_user         = $this->input->post('id_user');
        $id_order        = $this->input->post('id_order');
        $tanggal         = $this->input->post('tanggal');
        $total_harga     = $this->input->post('total_harga');
        
        $data = array(
            
            
            'id_user'       => $id_user,
            'id_order'      => $id_order,
            'tanggal'       => $tanggal,
            'total_harga'   => $total_harga,
        );

        $this->model_transaksi->tambah_transaksi($data, 'transaksi');
        redirect('kasir/data_transaksi');
    }

    public function edit($id_transaksi)
    {
        $where = array('id_transaksi'=>$id_transaksi);
        $data['transaksi'] = $this->model_transaksi->edit_transaksi($where,'transaksi')->result();
        $this->load->view('templates_kasir/header');
        $this->load->view('templates_kasir/sidebar');
        $this->load->view('kasir/edit_transaksi', $data);
        $this->load->view('templates_kasir/footer');
    }

    public function update()
    {
        $id_transaksi     = $this->input->post('id_transaksi');
        $id_user          = $this->input->post('id_user');
        $id_order         = $this->input->post('id_order');
        $tanggal          = $this->input->post('tanggal');
        $total_harga      = $this->input->post('total_harga');

        $data = array(
            'id_user' => $id_user,
            'id_order' => $id_order,
            'tanggal' => $tanggal,
            'total_harga' => $total_harga
        );

        $where = array(
            'id_transaksi' => $id_transaksi
        );

        $this->model_transaksi->update_transaksi($where,$data,'transaksi');
        redirect('kasir/data_transaksi/index');
    }

    public function hapus($id_transaksi)
    {
        $where = array('id_transaksi'=>$id_transaksi);
        $this->model_transaksi->hapus_data($where,'transaksi');
        redirect('kasir/data_transaksi/index');
    }
    
}