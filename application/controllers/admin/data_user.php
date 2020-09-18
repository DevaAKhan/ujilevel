<?php 

class Data_user extends CI_Controller{
    public function index()
    {
        $data['users'] = $this->model_user->tampil_user()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_user', $data);
        $this->load->view('templates_admin/footer');
    }
    
    public function hapus($id_user)
    {
        $where = array('id_user'=>$id_user);
        $this->model_user->hapus_data($where,'users');
        redirect('admin/data_user/index');
    }
}