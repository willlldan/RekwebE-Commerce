<?php
class Chart extends CI_Controller
{
    public function index($nama = '')
    {
        $data['judul'] = 'Detail Barang';
        $data['nama'] = $nama;
        $this->load->view('templates/header', $data);
        $this->load->view('chart/chart', $data);
    }
}
?>