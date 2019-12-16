<?php
class Shop extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Shop_model');
    }

    public function index($nama = '')
    {
        $data['judul'] = 'Home';
        $data['nama'] = $nama;
        $data['barang'] = $this->Shop_model->getAllBarang();
        $this->load->view('templates/header', $data);
        $this->load->view('shop/index', $data);
        $this->load->view('templates/footer');
    }
}
