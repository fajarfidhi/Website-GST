<?php

class Model_main extends CI_Model
{
    function __construct()
    {
        $this->load->database();
    }

    public function readproduct()
    {
        $this->db->select('*');
        $this->db->where('status', 1);
        $query = $this->db->get('products');
        return $query->result();
    }

    public function readteams()
    {
        $this->db->select('*');
        $this->db->where('status', 1);
        $query = $this->db->get('teams');
        return $query->result();
    }

    public function readclients()
    {
        $this->db->select('*');
        $this->db->where('status', 1);
        $query = $this->db->get('client');
        return $query->result();
    }

    public function readportfolio()
    {
        # code...
    }

    public function readcompany()
    {
        $this->db->select('*');
        $this->db->where('idcompany', 1);
        $query = $this->db->get('company')->row_array();
        return $query;
    }

    public function readbanner()
    {
        $this->db->select('*');
        $this->db->where('status', 1);
        $query = $this->db->get('banner');
        return $query->result();
    }

    public function readabout()
    {
        $this->db->select('*');
        $this->db->where('status', 1);
        $query = $this->db->get('about');
        return $query->result();
    }
}
