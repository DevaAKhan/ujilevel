<?php 

class Data_makanan extends CI_Controller{
    public function index()
    {
        $data['makanan'] = $this->model_makanan->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_makanan', $data);
        $this->load->view('templates_admin/footer');
    }
    public function tambah_aksi()
    {
        $nama_makanan   = $this->input->post('nama_makanan');
        $harga          = $this->input->post('harga');
        $status_makanan = $this->input->post('status_makanan');
        $kategori       = $this->input->post('kategori');

        $config['upload_path']   = './upload';
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['file_name']     = url_title($this->input->post('gambar'));
        $filename = $this->upload->file_name;
        $this->upload->initialize($config);
        $this->upload->do_upload('gambar');
        $data = $this->upload->data();

        $data = array(
            'nama_makanan' => $nama_makanan,
            'harga' => $harga,
            'status_makanan' => $status_makanan,
            'kategori' => $kategori,
            'gambar' => $data['file_name']
        );

        $this->model_makanan->tambah_makanan($data, 'makanan');
        redirect('admin/data_makanan');
    }

    public function edit($id_makanan)
    {
        $where = array('id_makanan'=>$id_makanan);
        $data['makanan'] = $this->model_makanan->edit_makanan($where,'makanan')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_makanan', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update()
    {
        $id_makanan     = $this->input->post('id_makanan');
        $nama_makanan   = $this->input->post('nama_makanan');
        $harga          = $this->input->post('harga');
        $status_makanan = $this->input->post('status_makanan');
        $kategori       = $this->input->post('kategori');

        $data = array(
            'nama_makanan' => $nama_makanan,
            'harga' => $harga,
            'status_makanan' => $status_makanan,
            'kategori' => $kategori
        );

        $where = array(
            'id_makanan' => $id_makanan
        );

        $this->model_makanan->update_data($where,$data,'makanan');
        redirect('admin/data_makanan/index');
    }

    public function hapus($id_makanan)
    {
        $where = array('id_makanan'=>$id_makanan);
        $this->model_makanan->hapus_data($where,'makanan');
        redirect('admin/data_makanan/index');
    }

    public function cetak_pdf_makanan(){
        ob_start();
        $data['c_makanan'] = $this->model_makanan->count_makanan();
        $data['makanan'] = $this->model_makanan->get_makanan();
        $this->load->view('admin/cetak_makanan',$data);
        $html = ob_get_contents();
                ob_end_clean();

        require './assets/html2pdf/autoload.php';

        $pdf = new Spipu\Html2Pdf\Html2Pdf('P','A4','en');
        $pdf->WriteHTML($html);
        $pdf->Output('Data_menu_'.date('d-m-Y'). '.pdf', 'D');
    }
}