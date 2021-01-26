<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dasboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Model_main');
		date_default_timezone_set("Asia/Jakarta");
	}
	public function index()
	{
		$data['product'] = $this->Model_main->readproduct();
		$data['teams']   = $this->Model_main->readteams();
		$data['clients'] = $this->Model_main->readclients();
		$data['company'] = $this->Model_main->readcompany();
		$data['banner']  = $this->Model_main->readbanner();
		$data['about']   = $this->Model_main->readabout();
		$this->load->view('body', $data);
	}

	public function readproductall()
	{
		$takedataproductall = $this->Model_main->read_all_product();
		$data = array();
		foreach ($takedataproductall as $showkan) {
			$list = array();
			$list[]  = '<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 d-flex align-items-stretch mt-4">
			<div class="icon-box">
				<div class="icon">
					<img src="' . base_url() . 'assets/front/img/product/' . $showkan['picture'] . '">
				</div>
				<h4><a href="">' . $showkan['name'] . '</a></h4>
				<p>' . substr($showkan['description'], 0, 120) . '...</p>
			</div>
		</div>';
			$data[] = $list;
		}
		echo json_encode($data);
	}

	public function sendmesaagescontact()
	{
		$message = array();

		$config['mailtype'] = 'html';
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'smtp.gmail.com';
		$config['smtp_user'] = 'fajar@bahterasolution.id';
		$config['smtp_pass'] = 'solution2017';
		$config['smtp_port'] = 587;
		$config['newline'] = "\r\n";

		$this->load->library('email', $config);

		$this->email->from('fidhifajar@gmail.com', 'Messages From Website');
		$this->email->to($this->input->post('txt_mail'));
		$this->email->subject($this->input->post('txt_subject'));
		$this->email->message($this->input->post('txt_message'));
		if ($this->email->send()) {
			$data = array(
				'idmessage' => NULL,
				'name' => $this->input->post('txt_name'),
				'subject' => $this->input->post('txt_subject'),
				'email' => $this->input->post('txt_email'),
				'message' => $this->input->post('txt_message'),
				'datesend' => date('Y-m-d H:i:s')
			);

			$this->Model_main->savemessage($data);
			$message['success'] = true;
		} else {
			$message['success'] = false;
		}
		echo json_encode($message);
	}

	public function newslater()
	{
	}
}
