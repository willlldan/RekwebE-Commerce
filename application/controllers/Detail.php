<?php
class Detail extends CI_Controller
{
    public function index($nama = '')
    {
        $data['judul'] = 'Detail Barang';
        $data['nama'] = $nama;
        $this->load->view('templates/header', $data);
        $this->load->view('detail/index', $data);
        $this->load->view('templates/footer');
    }
}
?>