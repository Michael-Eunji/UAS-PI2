<?php

class HomeModel extends CI_Model
{
    public function get_all_data_pelanggan()
    {
        $query = "SELECT * FROM home";
        return $this->db->query($query)->result_array();
    }

    public function simpanbarang()
    {
    }
}
