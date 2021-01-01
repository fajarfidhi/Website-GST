<?php

class Model_product extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function read_all()
    {
        return $this->db->get('product')->result();
    }

    public function read_by_id($idproduct)
    {
        return $this->db->get('product')->result_array();
    }

    public function add_save($data)
    {
        $this->db->insert('product', $data);
    }

    public function update_save($idproduct, $data)
    {
        $this->db->where('idproduct', $idproduct);
        $this->db->update('product', $data);
    }

    public function delete($idproduct)
    {
        $this->db->where('idproduct', $idproduct);
        $this->db->delete('product');
    }
}
