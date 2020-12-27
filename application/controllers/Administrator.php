<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrator extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Admin');
        if ($this->session->userdata('actived') == 1) {
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

    public function Profile()
    {
        $data['head_page'] = "My Profile";
        $data['dataprofile'] = $this->Model_Admin->read_profile($this->session->userdata('iduser'));
        $this->load->view('admin/header');
        $this->load->view('admin/data/profile', $data);
        $this->load->view('admin/footer');
    }

    public function signout()
    {
        $this->session->sess_destroy();
        redirect(base_url('Administrator/profile'));
    }
}
