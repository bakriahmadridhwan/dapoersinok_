<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Respon_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function getAllData()
    {
        return $this->db->get('suggest')->result_array();
    }

    public function inputData()
    {
        // $this->form_validation->set_rules('sugg', 'Sugg', 'required|trim');
        $data = [
            "sugg" => htmlspecialchars($this->input->post('sugg', true)),
            "date_created" => time()
        ];
        $this->db->insert('suggest', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('suggest', ['id' => $id]);
    }

    // CONTACT
    public function getAllMess()
    {
        return $this->db->get('message')->result_array();
    }

    public function inputMess()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('pesan', 'Pesan', 'required|trim');
        $data = [
            "name" => htmlspecialchars($this->input->post('name', true)),
            "email" => htmlspecialchars($this->input->post('email', true)),
            "pesan" => htmlspecialchars($this->input->post('pesan', true)),
            "date_created" => time()
        ];
        $this->db->insert('message', $data);
    }

    public function hapusM($id)
    {
        $this->db->delete('message', ['id' => $id]);
    }

    // COUNT DATA
    public function total_rows()
    {
        return $this->db->get('suggest')->num_rows();
    }

    public function total_rows2()
    {
        return $this->db->get('message')->num_rows();
    }
}
