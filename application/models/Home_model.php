<?php

class Home_model extends CI_model
{
    public function getAllBarang()
    {
        return $this->db->get('barang')->result_array();
    }
}
