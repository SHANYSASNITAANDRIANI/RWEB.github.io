<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profil extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_profil');
		

	}
	public function index()
	{
		$data['profil'] = $this->M_profil->getAll();
		$this->load->view('template/header');
		$this->load->view('v_profil',$data);
		$this->load->view('template/footer');
		
	}


}
