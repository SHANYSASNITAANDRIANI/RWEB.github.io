<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_auth');
		$this->M_auth->cek_login();
	}

	
	public function index()
	{
		$this->load->view('admin/v_dashboard');
	}
}
