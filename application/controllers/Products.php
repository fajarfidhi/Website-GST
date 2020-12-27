<?php

/**
 * undocumented class
 */
class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_admin_product');
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
        $takedata = $this->Model_admin_product->read_all();
        $data = array();
        $no = 0;
        foreach ($takedata->result() as $row) {
            $no++;
            $list = array();
            $list[] = $no;
            $list[] = '<img src="' . base_url() . 'assets/front/img/product/' . $row->picture . '" class="img-thumbnail" width="100" height="50" />';
            $list[] = $row->name;
            $list[] = substr($row->description, 0, 20);
            if ($row->status == 1) {
                $list[] = '<span class="badge badge-primary">Active</span>';
            } else {
                $list[] = '<span class="badge badge-warning">Non Aktive</span>';
            }
            $list[] =
                '<button type="button" class="btn btn-info btn-sm btn-flat" onclick="detail_id(' . "'" . $row->idproduct . "'" . ')">Detail</button>
                <button type="button" class="btn btn-primary btn-sm btn-flat" onclick="update_id(' . "'" . $row->idproduct . "'" . ')">Update</button>
                    <button type="button" class="btn btn-warning btn-sm btn-flat" onclick="delete_id(' . "'" . $row->idproduct . "'" . ')">Delete</button>';
            $data[] = $list;
        }
        $output = array('data' => $data);
        echo json_encode($output);
        exit();
    }

    public function detail($idproduct)
    {
        # code...
    }

    public function update($idproduct)
    {
        # code...
    }

    public function delete($idproduct)
    {
        # code...
    }
}
