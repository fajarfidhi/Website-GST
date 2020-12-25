<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dasboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Model_main');
	}
	public function index()
	{
		$data['product'] = $this->Model_main->readproduct();
		$data['teams'] = $this->Model_main->readteams();
		$data['clients'] = $this->Model_main->readclients();
		$this->load->view('body', $data);
	}
}
