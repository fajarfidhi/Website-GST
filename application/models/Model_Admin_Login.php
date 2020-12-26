<?php

/**
 * undocumented class
 */
class Model_Admin_Login extends CI_Model
{

    public function cek_email($email)
    {
        return $this->db->select('email')->get_where('user', ['email' => $email])->row_array();
    }

    public function cek_password($email, $password)
    {
        return $this->db->select('password')->get_where('user', ['email' => $email, 'password' => $password])->row_array();
    }

    public function cek_active($email, $password)
    {
        return $this->db->select('actived')->get_where('user', ['email' => $email, 'password' => $password])->row_array();
    }

    public function takedata($email, $password)
    {
        return $this->db->get_where('user', ['email' => $email, 'password' => $password])->row_array();
    }
}
