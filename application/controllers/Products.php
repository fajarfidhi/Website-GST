<?php

/**
 * undocumented class
 */
class Products extends CI_Controller
{
    public function __construct()
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
        $this->load->view('admin/header');
        $this->load->view('admin/data/product');
        $this->load->view('admin/footer');
    }

    public function readall()
    {
        $takedata = $this->Model_admin->read_all_products();
        $data = array();
        $no = 0;
        foreach ($takedata as $row) {
            $no++;
            $list = array();
            $list[] = $no;
            $list[] = '<img src="' . base_url() . 'assets/front/img/product/' . $row->picture . '" class="img-thumbnail" width="100" height="50" />';
            $list[] = $row->name;
            $list[] = substr($row->description, 0, 40);
            if ($row->status == 1) {
                $list[] = '<span class="badge badge-success">Active</span>';
            } else {
                $list[] = '<span class="badge badge-warning">Non Aktive</span>';
            }
            $list[] =
                '<button type="button" class="btn btn-info btn-sm btn-flat" onclick="detail_id(' . "'" . $row->idproducts . "'" . ')">Detail</button>
                <button type="button" class="btn btn-primary btn-sm btn-flat" onclick="update_id(' . "'" . $row->idproducts . "'" . ')">Update</button>
                    <button type="button" class="btn btn-danger btn-sm btn-flat" onclick="delete_id(' . "'" . $row->idproducts . "'" . ')">Delete</button>';
            $data[] = $list;
        }
        $output = array('data' => $data);
        echo json_encode($output);
        exit();
    }

    public function detail($idproduct)
    {
        $data = $this->Model_admin->read_by_id_product($idproduct);
        echo json_encode($data);
    }

    public function addsave($data)
    {
        # code...
    }

    public function updatesave($idproduct)
    {
        $status = array('success' => false, 'error' => false, 'messagess' => array());
        $this->form_validation->set_rules('txtname', 'Products Name', 'required|trim');
        $this->form_validation->set_rules('txttype', 'Type Name', 'required|trim');
        $this->form_validation->set_rules('txtstatus', 'Product Status', 'required|trim');
        $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

        if ($this->form_validation->run() == FALSE) {
            foreach ($_POST as $key => $value) {
                $status['messagess'][$key] = form_error($key);
            }
        } else {
            $cek_name = $this->model_admin->cek_name_product($this->input->post('txtname'));
            if ($cek_name->num_rows() > 0) {
                $status['error'] = true; // error true but name ready on database
            } else {
                $idproduct = $this->input->post('txtidproduct');
                $data = array(
                    'name' => $this->input->post('txtname'),
                    'description' => $this->input->post('txtdescription'),
                    'picture' => $this->input->post('txtpicture'),
                    'idtype' => $this->input->post('txtidtype'),
                    'datecreate' => date('Y-m-d H:i:s'),
                    'usercreate' => $_SESSION['iduser'],
                    'status' => $this->input->post('txtstatus')
                );
                $this->Model_admin->update_save_product($idproduct, $data);
                $status['success'] = true; // save produc bat not valid data
            }
        }
        echo json_encode($status);
    }

    public function delete($idproduct)
    {
        $data = $this->Model_admin->delete_by_id_product($idproduct);
        if ($data->num_rows == 0) {
            $messagess = true;
        } else {
            $messagess = false;
        }
        echo json_encode($messagess);
    }
}
