<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();

        $this->load->model('Menu_model');
    }

    public function index()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/dash_header', $data);
            $this->load->view('templates/dash_sidebar', $data);
            $this->load->view('templates/dash_topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/dash_footer');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', 'New menu added!');
            redirect('menu');
        }
    }

    // EDIT
    public function formeditMenu($id)
    {
        $data['title'] = 'Edit Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $data['user_menu'] = $this->Menu_model->idMenu($id);

        $this->load->view('templates/dash_header', $data);
        $this->load->view('templates/dash_sidebar', $data);
        $this->load->view('templates/dash_topbar', $data);
        $this->load->view('menu/editmenu', $data);
        $this->load->view('templates/dash_footer');
    }
    public function ubahMenu()
    {
        $this->Menu_model->updateMenu();


        $this->session->set_flashdata('message', 'Menu has been updated!');
        redirect('menu/index');
    }





    public function submenu()
    {
        $data['title'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Menu_model', 'menu');

        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/dash_header', $data);
            $this->load->view('templates/dash_sidebar', $data);
            $this->load->view('templates/dash_topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/dash_footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', 'New sub menu added!');
            redirect('menu/submenu');
        }
    }

    public function formeditSub($id)
    {
        $data['title'] = 'Edit Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Menu_model', 'menu');

        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['user_sub_menu'] = $this->Menu_model->idSub($id);

        $this->load->view('templates/dash_header', $data);
        $this->load->view('templates/dash_sidebar', $data);
        $this->load->view('templates/dash_topbar', $data);
        $this->load->view('menu/editsub', $data);
        $this->load->view('templates/dash_footer');
    }
    public function ubahSub()
    {
        $this->Menu_model->updateSub();

        $this->session->set_flashdata('message', 'Submenu has been updated!');
        redirect('menu/submenu');
    }
}
