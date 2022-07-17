<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class testing extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('auth');
	}

	
	public function index()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/v_tes');
		$this->load->view('admin/template/footer');
	}

	public function proses()
	{
		$this->form_validation->set_rules('id','id','required|is_unique[tes.id]|axact_length[3]');
		$this->form_validation->set_rules('password', 'pass','required|is_unique[tes.id]|axact_length[3]');

		if($this->form_validation->run()==true)
		{
			echo "Y";
		}
		else
		{
			echo "G";
		}

	}
}
