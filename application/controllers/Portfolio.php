<?php

/**
 * undocumented class
 */
class Portfolio extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_admin');
        if ($this->session->userdata('actived') == 1) {
        } else {
            redirect('Login_Admin');
        }
    }

    public function index()
    {
        $data['title'] = "Portfolio";
        $this->load->view('admin/header');
        $this->load->view('admin/data/portfolio', $data);
        $this->load->view('admin/footer');
    }
}
