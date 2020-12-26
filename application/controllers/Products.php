<?php

/**
 * undocumented class
 */
class Products extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/data/product');
        $this->load->view('admin/footer');
    }

    public function readall()
    {
    }
}
