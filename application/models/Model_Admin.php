<?php

class Model_Admin extends CI_Model
{

    public function read_profile($iduser)
    {
        return $this->db->get_where('user', ['email' => $iduser])->row_array();
    }
}
