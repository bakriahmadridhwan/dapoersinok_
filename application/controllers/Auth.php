<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    // CONSTRUCT
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }


    // LOGIN
    public function index()
    {

        if ($this->session->userdata('email')) {
            redirect('user');
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login', $data);
            $this->load->view('templates/auth_footer');
        } else {
            // validation success
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        // jika usernya ada
        if ($user) {
            // jika usernya active
            if ($user['is_active'] == 1) {
                // Cek password 
                if (password_verify($password, $user['password'])) {
                    // data benar
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];

                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Wrong Password!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">This email has not been activated!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Email is not registered!</div>');
            redirect('auth');
        }
    }


    // REGISTRATION
    public function registration()
    {

        if ($this->session->userdata('email')) {
            redirect('user');
        }


        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registration Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration', $data);
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash(
                    $this->input->post('password1'),
                    PASSWORD_DEFAULT
                ),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            // INSERT DATABASE
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Congratulation! your account has been created. Please Login!</div>');
            redirect('auth');
        }
    }



    // LOGOUT
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">You have been logged out!</div>');
        redirect('auth');
    }



    // 404
    public function blocked()
    {

        $this->load->view('auth/blocked');
    }


    public function deletemenu($id)
    {
        $this->load->model('Menu_model');
        $this->Menu_model->deletemenu($id);

        $this->session->set_flashdata('message', 'Menu has been deleted!');
        redirect('menu');
    }

    public function deletesub($id)
    {
        $this->load->model('Menu_model');
        $this->Menu_model->deletesub($id);

        $this->session->set_flashdata('message', 'Submenu has been deleted!');
        redirect('menu/submenu');
    }

    public function forgotPassword()
    {
        $data['title'] = 'Forgot Password';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/forgotpassword', $data);
        $this->load->view('templates/auth_footer');
    }
}
