<?php

/**
 * undocumented class
 */
class Administrator extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $log = $this->session->userdata('status');
        if ($log == "Login") {
        } else {
            redirect('Login_Admin');
        }
    }

    public function index()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/body');
        $this->load->view('admin/footer');
    }
}
