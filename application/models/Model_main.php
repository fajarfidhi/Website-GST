<?php

class Model_main extends CI_Model
{
    function __construct()
    {
        $this->load->database();
    }

    public function readproduct()
    {
        $query = $this->db->get('products');
        return $query->result();
    }

    public function readteams()
    {
        $query = $this->db->get('teams');
        return $query->result();
    }

    public function readclients()
    {
        $query = $this->db->get('client');
        return $query->result();
    }

    public function readabout()
    {
        # code...
    }

    public function readportfolio()
    {
        # code...
    }
}
