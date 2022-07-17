<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Auth');
		$this->Auth->cek_login();
	}

	
	public function index()
	{
		$this->load->view('v_dashboard');
	}

	public function about()
	{

		$this->load->view('template/header');
		$this->load->view('v_about');
		$this->load->view('template/footer');
		
	}
}
