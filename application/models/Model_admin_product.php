<?php

class Model_admin_product extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function read_all()
    {
        return $this->db->get('product');
    }
}
