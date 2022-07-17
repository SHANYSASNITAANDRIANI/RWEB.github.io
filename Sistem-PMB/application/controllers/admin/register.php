<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_auth');
	}

	public function index()
	{
		$this->load->view('admin/v_register');
	}

	public function proses()
	{
		$this->form_validation->set_rules('NIK', 'NIK','trim|required|alpha_numeric|exact_length[16]|is_unique[user_admin.nik]');
		$this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('cpassword', 'confirm password', 'required|matches[password]');
		$this->form_validation->set_rules('username', 'username','trim|required|is_unique[user_admin.username]');

		
		if ($this->form_validation->run()==true)
	   	{
			$nik = $this->input->post('NIK');
			$nama = $this->input->post('nama');
			$password = $this->input->post('password');
			$username = $this->input->post('username');


			$this->M_auth->register($nik,$nama, $username, $password );
			$this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
			
			
			redirect('admin/login');	
			
			
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('admin/register');
		}
	}

	public function tes()
	{
		if ($this->form_validation->run()==true)
		{
			echo "SUK";
		}
		else
		{
			echo "GGA";
		}
	}

}