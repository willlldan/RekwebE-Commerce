<?php

class Barang_model extends CI_model
{
    public function getAllBarang()
    {
        return $this->db->get('barang')->result_array();
    }
    public function tambahDataBarang($foto)
    {
        $data = [
            "nama_barang" => $this->input->post('nama_barang'),
            "gambar"  => $foto['file_name'],
            "stok_barang" => $this->input->post('stok_barang'),
            "harga_barang" => $this->input->post('harga_barang'),
            "deskripsi" => $this->input->post('deskripsi'),
        ];

        return $this->db->insert('barang', $data);
    }

    public function hapusDataBarang($id_barang)
    {
        return $this->db->delete('barang', ['id_barang' => $id_barang]);
    }

    public function getBarangById($id_barang)
    {
        return $this->db->get_where('barang', ['id_barang' => $id_barang])->row_array();
    }

    public function ubahDataBarang($foto)
    {
        $data = [
            "nama_barang" => $this->input->post('nama_barang', true),
            "gambar"  => $foto['file_name'],
            "stok_barang" => $this->input->post('stok_barang', true),
            "harga_barang" => $this->input->post('harga_barang', true),
            "deskripsi" => $this->input->post('deskripsi', true)
        ];

        $this->db->where('id_barang', $this->input->post('id_barang'));
        $this->db->update('barang', $data);
    }

    public function cariDataBarang()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('nrp', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('barang')->result_array();
    }
}
