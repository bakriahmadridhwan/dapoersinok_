<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     is_logged_in();
    // }

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->model('Upload_model');
        $this->load->model('Data_model');
        $this->load->library('form_validation');

        is_logged_in();
    }



    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->model('Respon_model');
        $data['total_suggest'] = $this->Respon_model->total_rows();
        $data['total_message'] = $this->Respon_model->total_rows2();

        $this->load->view('templates/dash_header', $data);
        $this->load->view('templates/dash_sidebar', $data);
        $this->load->view('templates/dash_topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/dash_footer');
    }


    // ROLE
    public function role()
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] =  $this->db->get('user_role')->result_array();


        $this->load->view('templates/dash_header', $data);
        $this->load->view('templates/dash_sidebar', $data);
        $this->load->view('templates/dash_topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/dash_footer');
    }

    public function addrole()
    {
        $this->Admin_model->inputData();


        $this->session->set_flashdata('message', 'New role added!');
        redirect('admin/role');
    }
    public function formeditRole($id)
    {
        $data['user_role'] = $this->Admin_model->idRole($id);

        $data['title'] = 'Edit Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/dash_header', $data);
        $this->load->view('templates/dash_sidebar', $data);
        $this->load->view('templates/dash_topbar', $data);
        $this->load->view('admin/editRole', $data);
        $this->load->view('templates/dash_footer');
    }
    public function ubahRole()
    {
        $this->Admin_model->updateRole();


        $this->session->set_flashdata('message', 'Role has been updated!');
        redirect('admin/role');
    }
    public function hapusRole($id)
    {
        $this->Admin_model->hapusDataRole($id);


        $this->session->set_flashdata('message', 'Role has been deleted!');
        redirect('admin/role');
    }



    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] =  $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();


        $this->load->view('templates/dash_header', $data);
        $this->load->view('templates/dash_sidebar', $data);
        $this->load->view('templates/dash_topbar', $data);
        $this->load->view('admin/roleaccess', $data);
        $this->load->view('templates/dash_footer');
    }




    public function changeAccess()
    {

        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }


        $this->session->set_flashdata('message', 'Access Changed!');
    }
}
