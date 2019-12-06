<?php
class Login extends CI_Controller
{
    public function index($nama = '')
    {
        $data['judul'] = 'Detail Barang';
        $data['nama'] = $nama;
        $this->load->view('templates/header', $data);
        $this->load->view('login/index', $data);
        $this->load->view('templates/footer');
    }
}
?>