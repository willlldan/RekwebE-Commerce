<?php

class Home_model extends CI_model
{
    public function getAllBarang()
    {
        $this->db->order_by('id_barang', 'desc');
        return $this->db->get('barang')->result_array();
    }

    public function getBarangById($id)
    {
        return $this->db->get_where('barang', ['id_barang' => $id])->row_array();
    }
}
