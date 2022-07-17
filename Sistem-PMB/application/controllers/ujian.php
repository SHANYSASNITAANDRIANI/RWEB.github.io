<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ujian extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_ujian_mhs');
		$this->load->model('admin/M_ujian');

	}
	

	public function index()
	{
		$data['detail'] = $this->M_ujian_mhs->getAll();
		$this->load->view('template/header');
		$this->load->view('v_ujian',$data);
		$this->load->view('template/footer');
	}


	public function mulai($table)
	{
		$data['soal'] = $this->M_ujian->getAll2($table);

		$this->load->view('template/header');
		$this->load->view('v_mulai',$data);
		$this->load->view('template/footer');
	}

	// public function nilai()
	// {
	// 	$name_tb = $this->input->post('nama_tb');
	// 	$jwban = $this->input->post('input_jwb_');
	// 	$ndata = $this->input->post('ndata');
	// 	$nminim = $this->input->post('nminimal');



		
	// 	$data['nilai'] = $this->M_ujian->getById2($table);

	// 	$this->load->view('template/header');
	// 	$this->load->view('v_mulai',$data);
	// 	$this->load->view('template/footer');
	// }
	// public function nilai()
	// {
	// 	$name_tb = $this->input->post('nama_tb');
		
	// 	$ndata = $this->input->post('ndata');
	// 	$nminim = $this->input->post('nminimal');
	// 	echo $name_tb,  $ndata, $nminim; 
	// 	for($i=1; $i<=$ndata; $i++)
	// 	{
	// 		$data[$i] = $this->input->post('input_jwb_'.$i);
	// 	}

	// 	for($i=1; $i<=$ndata; $i++)
	// 	{
	// 		echo $data[$i];
	// 	}

	// 	$nilai_anda = $this->M_ujian_mhs->nilai($data, $name_tb, $ndata);
	// 	echo $nilai_anda;
		// if($nilai_anda == $nminim)
		// {
		// 	echo '<script language="javascript">';
		// 	echo 'alert("Anda lulus, nilai anda"'.$nilai_anda.'")"';
		// 	echo '</script>';
		// }




		// else
		// {
		// 	echo '<script language="javascript">';
		// 	echo 'alert("Anda tidak lulus, nilai anda "'.$nilai_anda.'" silahkan coba kembali")';
		// 	echo '</script>';
		// }
	// }

	public function nilai()
	{
		$name_tb = $this->input->post('nama_tb');
		// echo $this->input->post('input_jwb_1');
		$ndata = $this->input->post('ndata');
		$nminim = $this->input->post('nminimal');
		
		// echo $ndata; 

		for($i=1; $i<=$ndata; $i++)
		{
			$data[$i] = $this->input->post('input_jwb_'.$i);
		}
		// for($i=1; $i<=$ndata; $i++)
		// {
		// 	echo $data[$i];
		// }	
		$hasil = $this->M_ujian_mhs->hitung_nilai($data, $ndata, $name_tb);
		// echo $hasil;
		if($hasil >= $nminim)
		{
			echo '<script language="javascript">';
			echo 'alert("Selamat anda lulus")';
			echo '</script>';
			$this->index();
			


		}




		else
		{
			echo '<script language="javascript">';
			echo 'alert("Maaf, anda gagal. Silahkan coba kembali")';
			echo '</script>';
			redirect('v_ujian');
		}

	}


}
