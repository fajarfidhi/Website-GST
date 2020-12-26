<?php

/**
 * undocumented class
 */
class Login_Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Model_Admin_Login');
        $log = $this->session->userdata('status');
        if ($log == "Login") {
            redirect('Administrator');
        } else {
        }
    }

    public function index()
    {
        $this->load->view('admin/login');
    }

    public function cekdata()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('txtemail', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('txtpassword', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = "Login Admin";
            $this->load->view('admin/login');
        } else {

            #  $data = array($match_error => false, $username_messages => false, $password_messages => false);
            $email = $this->input->post('txtemail');
            $password = $this->input->post('txtpassword');

            $cekemail = $this->Model_Admin_Login->cek_email($email);
            if ($cekemail == false) {
                $this->session->set_flashdata('messages', '<div class="alert alert-warning" role="alert">Email not registered! </div>');
                redirect('Login_Admin');
            } else {
                $cekpassword = $this->Model_Admin_Login->cek_password($email, $password);
                if ($cekpassword == true) {
                    $cekactive = $this->Model_Admin_Login->cek_active($email, $password);
                    if ($cekactive['actived'] == 1) {
                        $takedata = $this->Model_Admin_Login->takedata($email, $password);
                        $showdata = [
                            'iduser' => $takedata['iduser'],
                            'username' => $takedata['username'],
                            'email' => $takedata['email'],
                            'password' => $takedata['password'],
                            'name' => $takedata['name'],
                            'picture' => $takedata['picture'],
                            'status' => "Login",
                            'actived' => $takedata['actived'],
                            'access' => $takedata['access']
                        ];
                        $this->session->set_userdata($showdata);
                        redirect('Administrator');
                    } else {
                        $this->session->set_flashdata('messages', '<div class="alert alert-warning" role="alert">
						Account not actived </div>');
                        redirect('Login_Admin');
                    }
                } else {
                    $this->session->set_flashdata('messages', '<div class="alert alert-warning" role="alert">
					Password Wrong </div>');
                    $data['title'] = "Login User";
                    $this->load->view('admin/login', $data);
                }
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Login_Admin');
    }
}
