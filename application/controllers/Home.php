<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
    }

    public function index($nama = '')
    {
        $data['judul'] = 'Home';
        $data['nama'] = $nama;
        $data['barang'] = $this->Home_model->getAllBarang();
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail()
    {
        $data['judul'] = 'Detail Barang';
        $this->load->view('templates/header', $data);
        $this->load->view('home/detail', $data);
        $this->load->view('templates/footer');
    }
}
