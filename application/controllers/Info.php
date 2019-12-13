<?php
class Info extends CI_Controller
{
    public function index($nama = '')
    {
        $data['judul'] = 'BECAUSEØMAT';
        $data['nama'] = $nama;
        $this->load->view('templates/header_login', $data);
        $this->load->view('myaccount/info/index', $data);
        $this->load->view('templates/footer');
    }
}
?>