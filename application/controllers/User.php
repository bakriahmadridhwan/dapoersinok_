<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    // public function __construct()
    // {
    //     parent::__construct();
    //     is_logged_in();
    // }




    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_model');
        $this->load->model('Upload_model');
        $this->load->model('Respon_model');
        $this->load->library('form_validation');

        is_logged_in();
    }




    // VIEW USER DATA CENTER
    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/dash_header', $data);
        $this->load->view('templates/dash_sidebar', $data);
        $this->load->view('templates/dash_topbar', $data);
        $this->load->view('user/v_profile', $data);
        $this->load->view('templates/dash_footer');
    }

    // TAMPILKAN DATA
    public function tampilkanData()
    {
        $data['title'] = 'Data Center';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['datacenter'] = $this->Data_model->getAllUser();
        if ($this->input->post('keyword')) {
            $data['datacenter'] = $this->Data_model->cariDatacenter();
        }

        // PAGINATION
        $this->load->library('pagination');



        // ambil data keyword
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }


        // config
        $this->db->like('bulan', $data['keyword']);
        $this->db->or_like('tahun', $data['keyword']);
        $this->db->or_like('bidang', $data['keyword']);
        $this->db->or_like('judul', $data['keyword']);
        $this->db->from('datacenter');

        $config['total_rows'] = $this->db->count_all_results();

        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 6;
        // $config['num_links'] = 5; untuk menampilkan berapa halaman page numbernya



        // inisialisasi
        $this->pagination->initialize($config);


        // PAGINATION
        $data['start'] = $this->uri->segment(3);
        $data['datacenter'] = $this->Data_model->getData($config['per_page'], $data['start'], $data['keyword']);


        $this->load->view('templates/dash_header', $data);
        $this->load->view('templates/dash_sidebar', $data);
        $this->load->view('templates/dash_topbar', $data);
        $this->load->view('user/v_data', $data);
        $this->load->view('templates/dash_footer');
    }

    // TAMBAH DATA
    public function formTambah()
    {
        $data['title'] = 'Tambah Data';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // $data['datacenter'] = $this->Upload_model->all();


        $this->load->view('templates/dash_header', $data);
        $this->load->view('templates/dash_sidebar', $data);
        $this->load->view('templates/dash_topbar', $data);
        $this->load->view('user/add_data', $data);
        $this->load->view('templates/dash_footer');
    }
    public function simpanData()
    {

        $config['upload_path'] = './assets/fileupload/';
        $config['allowed_types'] = 'docx|pdf|doc';
        $config['max_size'] = 6000;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file')) {

            $file = $this->upload->data();
            $file = $file['file_name'];
            $tahun = $this->input->post('tahun', true);
            $bulan = $this->input->post('bulan', true);
            $bidang = $this->input->post('bidang', true);
            $judul = $this->input->post('judul', true);

            $data = [
                'tahun' => $tahun,
                'bulan' => $bulan,
                'bidang' => $bidang,
                'judul' => $judul,
                'file' => $file,
            ];

            $this->db->insert('datacenter', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Data added successfully!</div>');
            redirect('user/tampilkanData');
        } else {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            echo "Gagal upload !!";
        }




        // $this->Data_model->inputData();
        // redirect('user/tampilkanData');
    }


    // EDIT DATA
    public function formEdit($id)
    {
        $data['title'] = 'Edit Data';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['datacenter'] = $this->Data_model->dapatData($id);

        $this->load->view('templates/dash_header', $data);
        $this->load->view('templates/dash_sidebar', $data);
        $this->load->view('templates/dash_topbar', $data);
        $this->load->view('user/e_data', $data);
        $this->load->view('templates/dash_footer');
    }
    public function ubahData()
    {


        $config['upload_path'] = './assets/fileupload/';
        $config['allowed_types'] = 'docx|pdf|doc';
        $config['max_size'] = 6000;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file')) {

            $file = $this->upload->data();
            $file = $file['file_name'];
            $tahun = $this->input->post('tahun', true);
            $bulan = $this->input->post('bulan', true);
            $bidang = $this->input->post('bidang', true);
            $judul = $this->input->post('judul', true);

            $data = [
                'tahun' => $tahun,
                'bulan' => $bulan,
                'bidang' => $bidang,
                'judul' => $judul,
                'file' => $file,
            ];

            $this->db->where('id', $this->input->post('id'));
            $this->db->update('datacenter', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Your data has been updated!</div>');
            redirect('user/tampilkanData');
        } else {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            echo "Gagal upload !!";
        }



        // $this->Data_model->updateData();
        // redirect('user/tampilkanData');
    }


    // HAPUS DATA
    public function hapus($id)
    {
        $this->Data_model->hapusData($id);

        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Your data has been deleted!</div>');
        redirect('user/tampilkanData');
    }


    // PROFIL
    public function profile()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/dash_header', $data);
        $this->load->view('templates/dash_sidebar', $data);
        $this->load->view('templates/dash_topbar', $data);
        $this->load->view('user/v_profile', $data);
        $this->load->view('templates/dash_footer');
    }



    public function editProfile()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/dash_header', $data);
            $this->load->view('templates/dash_sidebar', $data);
            $this->load->view('templates/dash_topbar', $data);
            $this->load->view('user/e_profile', $data);
            $this->load->view('templates/dash_footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');


            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size']     = '5048';
                $config['upload_path'] = 'assets/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {

                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/profile/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');


            $this->session->set_flashdata('message', 'Your profile has been updated!');
            redirect('user/profile');
        }
    }




    public function changePassword()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/dash_header', $data);
            $this->load->view('templates/dash_sidebar', $data);
            $this->load->view('templates/dash_topbar', $data);
            $this->load->view('user/changepassword', $data);
            $this->load->view('templates/dash_footer');
        } else {
            $current_password = $this->input->post('current_password');

            $new_password = $this->input->post('new_password1');

            // PASSWORD SALAH (password saat ini salah)
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password!</div>');
                redirect('user/changepassword');
            } else {
                // PASSWORD SAMA (yang lama dengan yang baru)
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New password cannot be the same as current password!</div>');
                    redirect('user/changepassword');
                } else {
                    // PASSWORD OK
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
                }

                $this->db->set('password', $password_hash);
                $this->db->where('email', $this->session->userdata('email'));
                $this->db->update('user');

                $this->session->set_flashdata('messages', 'Password changed!');
                redirect('user/changepassword');
            }
        }
    }


    // MASUKAN 
    public function respon()
    {
        $data['title'] = 'Respon';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['suggest'] = $this->Respon_model->getAllData();
        $data['message'] = $this->Respon_model->getAllMess();

        $this->load->model('Respon_model');
        $data['total_suggest'] = $this->Respon_model->total_rows();
        $data['total_message'] = $this->Respon_model->total_rows2();

        $this->load->view('templates/dash_header', $data);
        $this->load->view('templates/dash_sidebar', $data);
        $this->load->view('templates/dash_topbar', $data);
        $this->load->view('masukan/index', $data);
        $this->load->view('templates/dash_footer');
    }

    // SUGGEST
    public function suggest()
    {
        $this->Respon_model->inputData();

        $this->session->set_flashdata('pesan', 'ya');
        redirect('landing');
    }

    public function hapusData($id)
    {
        $this->Respon_model->hapus($id);
        $this->session->set_flashdata('message', 'Data deleted!');
        redirect('user/respon');
    }

    // CONTACT
    public function contact()
    {
        $this->Respon_model->inputMess();
        redirect('landing');
    }

    public function hapusMess($id)
    {
        $this->Respon_model->hapusM($id);
        $this->session->set_flashdata('message', 'Data deleted!');
        redirect('user/respon');
    }
}
