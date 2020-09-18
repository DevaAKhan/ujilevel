<?php 

class Dashboard extends CI_Controller{
    public function __construct(){
        parent::__construct();

        if ($this->session->userdata('id_level') != '1') {
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> Anda Belum Login <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('auth/login');
        }
    }

    public function index()
    {
        $data['makanan'] = $this->model_makanan->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_ke_keranjang($id_makanan)
    {
        $makanan = $this->model_makanan->find($id_makanan);

        $data = array(
            'id'         => $makanan->id_makanan,
            'qty'        => 1,
            'price'      => $makanan->harga,
            'name'       => $makanan->nama_makanan 
        );

        $this->cart->insert($data);
        redirect('dashboard');
    }

    public function detail_keranjang()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('dashboard/index');
    }

    public function pemesanan()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
    }

    public function proses_pesanan()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('proses_pesanan');
        $this->load->view('templates/footer');
    }

    public function simpan_order()
    {
        $no_meja        = $this->input->post('no_meja');
        $tanggal        = $this->input->post('tanggal');
        $id_user        = $this->input->post('id_user');
        $keterangan     = $this->input->post('keterangan');
        $total_harga    = $this->input->post('total_harga');
        $status_order   = 'Proses';
        
        $data = array(
            'no_meja'      => $no_meja,
            'tanggal'      => $tanggal,
            'id_user'      => $id_user,
            'keterangan'   => $keterangan,
            'total_harga'  => $total_harga,
            'status_order' => $status_order
        );

        $this->model_order->tambah_order($data, 'orders');
        $this->cart->destroy();
        redirect('dashboard/proses_pesanan');
    }

    public function detail($id_makanan)
    {
        $data['makanan'] = $this->model_makanan->detail_makanan($id_makanan);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_makanan', $data);
        $this->load->view('templates/footer');
    }

    
}