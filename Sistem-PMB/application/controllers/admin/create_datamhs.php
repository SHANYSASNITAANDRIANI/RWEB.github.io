<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class create_datamhs extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/m_mhs');
	}
	
	public function index()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/v_create_datamhs');
		$this->load->view('admin/template/footer');
	}

	function tampung()
	{
		$this->form_validation->set_rules('NIK', 'NIK','trim|required|alpha_numeric|exact_length[16]|is_unique[data_mhs.nik]');
		$this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('cpassword', 'confirm password', 'required|matches[password]');
		$this->form_validation->set_rules('no_tlp', 'No telfon','trim|required|alpha_numeric');
		$this->form_validation->set_rules('nama', 'Nama','required');
		$this->form_validation->set_rules('alamat', 'Alamat','required');
		$this->form_validation->set_rules('email', 'Email','required|is_unique[data_mhs.email]');
		if ($this->form_validation->run()==true)
	   	{
			$nik = $this->input->post('NIK');
			$nama = $this->input->post('nama');
			$jk = $this->input->post('jk');
			$alamat = $this->input->post('alamat');
			$no_tlp = $this->input->post('no_tlp');
			$password = $this->input->post('password');
			$email = $this->input->post('email');
			$jurusan = $this->input->post('jurusan');


			$this->m_mhs->save($nik,$nama, $jk, $alamat, $no_tlp,$email, $jurusan, $password );
			$this->session->set_flashdata('success_register','Data berhasil ditambah');
			redirect('admin/read_data');
	}
	else
		$this->session->set_flashdata('error', validation_errors());
		redirect('admin/create_datamhs');
}
}
