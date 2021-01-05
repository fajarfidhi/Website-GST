<?php

/**
 * undocumented class
 */
class Login_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_admin');
        if ($this->session->userdata('actived') == 1) {
            redirect('Administrator');
        } else {
        }
    }

    public function index()
    {
        $data['title'] = "Login Admin GST";
        $this->load->view('admin/login', $data);
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

            $cekemail = $this->Model_admin->cek_email_login($email);
            if ($cekemail == false) {
                $this->session->set_flashdata('messages', '<div class="alert alert-warning" role="alert">Email not registered! </div>');
                redirect('Login_Admin');
            } else {
                $cekpassword = $this->Model_admin->cek_password_login($email, $password);
                if ($cekpassword == true) {
                    $cekactive = $this->Model_admin->cek_active_login($email, $password);
                    if ($cekactive['actived'] == 1) {
                        $takedata = $this->Model_admin->take_data_login($email, $password);
                        $showdata = [
                            'iduser' => $takedata['iduser'],
                            'username' => $takedata['username'],
                            'email' => $takedata['email'],
                            'password' => $takedata['password'],
                            'name' => $takedata['name'],
                            'birthday' => $takedata['birthday'],
                            'address' => $takedata['address'],
                            'city' => $takedata['city'],
                            'phone' => $takedata['phone'],
                            'picture' => $takedata['picture'],
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
}
