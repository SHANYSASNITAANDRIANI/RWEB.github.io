<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class read_data extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_mhs');
	}

	public function index()
	{
		$data['siswa'] = $this->M_mhs->getAll();
		$this->load->view('admin/template/header');
		$this->load->view('admin/v_read_data',$data);
		$this->load->view('admin/template/footer');
	}
}