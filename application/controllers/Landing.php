<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Respon_model');
	}

	// SUGGEST
	public function index()
	{
		$data['title'] = 'Dapoersinok__';

		$this->form_validation->set_rules('sugg', 'Sugg', 'required|trim');

		if ($this->form_validation->run() == false) {
			// $this->load->view('templates/header_landing', $data);
			$this->load->view('landing/index', $data);
			// $this->load->view('templates/footer_landing');
		} else {
			$data = [
				"sugg" => htmlspecialchars($this->input->post('sugg', true)),
				"date_created" => time()
			];
			$this->db->insert('suggest', $data);
			$this->session->set_flashdata('message', 'Thanks for giving suggest :)');
			redirect('landing');
		}
	}

	// MESSAGE
	public function mess()
	{
		$data['title'] = 'Dapoersinok__';


		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('pesan', 'Pesan', 'required|trim');

		if ($this->form_validation->run() == false) {
			// $this->load->view('templates/header_landing', $data);
			$this->load->view('landing/index', $data);
			// $this->load->view('templates/footer_landing');
		} else {
			$data = [
				"name" => htmlspecialchars($this->input->post('name', true)),
				"email" => htmlspecialchars($this->input->post('email', true)),
				"pesan" => htmlspecialchars($this->input->post('pesan', true)),
				"date_created" => time()
			];
			$this->db->insert('message', $data);
			$this->session->set_flashdata('message', 'Thanks for sending the message :)');
			redirect('landing');
		}
	}
}
