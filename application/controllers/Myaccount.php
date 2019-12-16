<?php
class Myaccount extends CI_Controller
{
    public function index($nama = '')
    {
        $data['judul'] = 'BECAUSEØMAT';
        $data['nama'] = $nama;
        $this->load->view('templates/header_login', $data);
        $this->load->view('myaccount/index', $data);
        $this->load->view('templates/footer');
    }

    public function myinfo()
    {
        $data['judul'] = 'BECAUSEØMAT';
        $this->load->view('templates/header_login', $data);
        $this->load->view('myaccount/myinfo', $data);
        $this->load->view('templates/footer');
    }
}
