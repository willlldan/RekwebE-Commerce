<?php
class Shop extends CI_Controller
{
    public function index($nama = '')
    {
        $data['judul'] = 'Home';
        $data['nama'] = $nama;
        $this->load->view('templates/header', $data);
        $this->load->view('shop/index', $data);
        $this->load->view('templates/footer');
    }
}
?>