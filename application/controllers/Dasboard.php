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

	// Menampilkan data jquery readmore product
	public function readproductall()
	{
		$takedataproductall = $this->Model_main->read_all_product();
		$data = array();
		foreach ($takedataproductall as $showkan) {
			$list = array();
			$list[]  = '<div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 d-flex align-items-stretch mt-4">
			<div style="width: 110%;" class="icon-box">
				<div class="icon">
					<img style="height: 100%;" src="' . base_url() . 'assets/front/img/product/' . $showkan['picture'] . '">
				</div>
				<h5><a href="">' . $showkan['name'] . '</a></h5>
				
			</div>
		</div>';
			$data[] = $list;
		}
		echo json_encode($data);
	}

	public function sendmesaagescontact()
	{
		$return = array();

		$email = $this->input->post('txt_email');
		$name = $this->input->post('txt_name');
		$subject = $this->input->post('txt_subject');
		$message = $this->input->post('txt_message');
		$address_send = "fajar@bahterasolution.id";

		// Kirim data ke database
		$data = array(
			'idmessage' => NULL,
			'name' => $name,
			'subject' => $subject,
			'email' => $email,
			'message' => $message,
			'datesend' => date('Y-m-d H:i:s')
		);
		$this->Model_main->savemessage($data);

		// kririm data ke email
		$config['mailtype'] = 'html';
		$config['protocol'] = 'smtp';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['smtp_host'] = 'smtp.office365.com';
		$config['smtp_user'] = 'technical@bahterasolution.co.id';
		$config['smtp_pass'] = 'Solution.2020';
		$config['smtp_port'] = 587;
		$config['newline'] = "\r\n";
		$config['wordwrap'] = TRUE;
		$config['charset'] = 'iso-8859-1';

		$this->load->library('email');
		$this->email->initialize($config);

		$this->email->from($email, $name);
		$this->email->to($address_send);
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->send();

		// jika gagal atau sukses
		if ($this->email->send()) {
			$return['success'] = true;
		} else {
			$return['success'] = false;
		}
		echo json_encode($return);
	}

	public function newslater()
	{
	}
}
