<?php

class Member extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('member/header');
        $this->load->view('member/body');
        $this->load->view('member/footer');
    }
}
