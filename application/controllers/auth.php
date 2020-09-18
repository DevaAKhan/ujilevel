<?php

class Auth extends CI_Controller {
    public function login()
    {
        $this->form_validation->set_rules('username','Username','required',['required' => 'Username wajib diisi!']);
        $this->form_validation->set_rules('password','Password','required',['required' => 'Password wajib diisi!']);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('form_login');
            $this->load->view('templates/footer');
        } else {
            $auth = $this->model_auth->cek_login();
            if ($auth == FALSE) {
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> Username atau Password Anda Salah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('auth/login');
            } else {
                $this->session->set_userdata('username',$auth->username);
                $this->session->set_userdata('id_level',$auth->id_level);
                $this->session->set_userdata('id_user',$auth->id_user); 
                $this->session->set_userdata('nama_user',$auth->nama_user); 

                switch($auth->id_level){
                    case 1 : redirect('dashboard');
                            break;
                    case 2 : redirect('admin/dashboard_admin');
                             break;
                    case 3 : redirect('kasir/dashboard_kasir');
                             break;
                    default: break;
                }
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}

?>