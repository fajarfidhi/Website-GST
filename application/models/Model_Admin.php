<?php

class Model_admin extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    //====================================== LOGIN ADMINISTRATOR =================================

    public function cek_email_login($email)
    {
        return $this->db->select('email')->get_where('user', ['email' => $email])->row_array();
    }

    public function cek_password_login($email, $password)
    {
        return $this->db->select('password')->get_where('user', ['email' => $email, 'password' => $password])->row_array();
    }

    public function cek_active_login($email, $password)
    {
        return $this->db->select('actived')->get_where('user', ['email' => $email, 'password' => $password])->row_array();
    }

    public function take_data_login($email, $password)
    {
        return $this->db->get_where('user', ['email' => $email, 'password' => $password])->row_array();
    }


    //--------------------------------------------------PROFILE

    public function read_profile($iduser)
    {
        return $this->db->get_where('user', ['email' => $iduser])->row_array();
    }

    //------------------------------------------------- MODEL PRODUCT

    public function read_all_products()
    {
        return $this->db->get('products')->result();
    }

    public function read_by_id_product($idproduct)
    {
        $this->db->select('*');
        $this->db->where('idproducts', $idproduct);
        $query = $this->db->get('products');
        return $query;
    }

    public function read_update_per_id($idproducts)
    {
        $this->db->select('*');
        $this->db->limit(1);
        $this->db->where('idproducts', $idproducts);
        $query = $this->db->get('products');
        return $query->row();
    }

    public function add_save_product($data)
    {
        $this->db->insert('products', $data);
    }

    public function update_save_product($idproduct, $data)
    {
        $this->db->where('idproducts', $idproduct);
        $this->db->update('products', $data);
    }

    public function delete_product($idproduct)
    {
        $this->db->where('idproducts', $idproduct);
        $this->db->delete('products');
    }

    // ---------------------MODEL PORTFOLIO
}
