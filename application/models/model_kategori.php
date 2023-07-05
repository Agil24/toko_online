<?php

class Model_kategori extends CI_Model
{
    public function data_cake()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'cake'));
    }
    public function data_party_cake()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'party cake'));
    }
    public function data_dessert()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'dessert'));
    }
}
