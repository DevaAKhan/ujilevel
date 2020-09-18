<?php 

class Registrasi extends CI_Controller{
    public function index()
    {
        $this->form_validation->set_rules('username','username','required',['required' => 'Username wajib diisi!']);
        $this->form_validation->set_rules('password','password','required',['required' => 'Password wajib diisi!']);
        $this->form_validation->set_rules('nama_user','nama user','required',['required' => 'Nama User wajib diisi!']);
        $this->form_validation->set_rules('id_level','id level','required',['required' => 'ID Level wajib diisi!']);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('registrasi');
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'id_user'     => '',
                'username'    => $this->input->post('username'),
                'password'    => $this->input->post('password'),
                'nama_user'   => $this->input->post('nama_user'),
                'id_level'    => $this->input->post('id_level')
            );

            $this->db->insert('users',$data);
            redirect('auth/login');
        }
        
    }

}

?>