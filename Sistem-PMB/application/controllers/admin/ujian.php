<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ujian extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('admin/M_ujian');
	}

	
	public function index()
	{
		$data['soal'] = $this->M_ujian->getAll();
		$this->load->view('admin/template/header');
		$this->load->view('admin/v_ujian',$data);
		$this->load->view('admin/template/footer');
	}

	public function tampil_soal()
	{
		$data['soal'] = $this->M_ujian->getAll2();
		$this->load->view('admin/template/header');
		$this->load->view('admin/v_edit_soal',$data);
		$this->load->view('admin/template/footer');
	}

	function tambah()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/v_create_detailsoal');
		$this->load->view('admin/template/footer');
	}

	function tampung()
	{
		$this->form_validation->set_rules('jurusan','Jurusan','required');
		$this->form_validation->set_rules('nsoal','Jumlah soal','required|numeric');
		$this->form_validation->set_rules('status','status','required');
		
		if($this->form_validation->run()==true)
		{
			$nsoal= $this->input->post('nsoal');
			$status= $this->input->post('status');
			$jurusan= $this->input->post('jurusan');
			$lama_waktu= $this->input->post('lama_waktu');
			$nilai_minimal= $this->input->post('nilai_minimal');
					
				
			$this->M_ujian->add($jurusan,$nsoal, $status, $lama_waktu, $nilai_minimal);
			$this->M_ujian->create_table($jurusan, $nsoal, $nilai_minimal);
			$this->session->set_flashdata('success_register','Data berhasil diinput');
				
			redirect('admin/ujian');
			}
			else
			{
				$this->session->set_flashdata('error','Data gagal diinput');
				redirect('admin/ujian');
			}
		

	}


	function edit_detailsoal($id)
	{
		
		
		$data['soal'] = $this->M_ujian->getById($id);
		$this->load->view('admin/template/header');
		$this->load->view('admin/v_edit_detailsoal',$data);
		$this->load->view('admin/template/footer');
	}


	function update_detail()
	{
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
		$this->form_validation->set_rules('nsoal', 'Jumlah soal', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required|numeric');

		if($this->form_validation->run()==true)
		{
			$id = $this->input->post('id');
			
			$data['jurusan'] = $this->input->post('jurusan');	
			$data['jumlah_soal'] = $this->input->post('nsoal');
			$data['status'] = $this->input->post('status');
			$data['lama_waktu'] = $this->input->post('lama_waktu');
			$data['nilai_minimal'] = $this->input->post('nilai_minimal');

			$this->M_ujian->update($data, $id);
			$this->session->set_flashdata('success_register','Data berhasil diupdate');
			redirect('admin/ujian');
		}
		else
		{
			$this->session->set_flashdata('error','Data gagal');
			redirect('admin/ujian');
		}
	}

	function delete($id)
	{	
		$this->M_ujian->delete($id);
		$this->M_ujian->delete_tb($id);
		$cek = $this->M_ujian->delete($id);
		$cek;
		if($cek)
		{
			$this->session->set_flashdata('success_register','Data berhasil dihapus');
			redirect('admin/ujian');
		}
		else
		{
			$this->session->set_flashdata('error','Data gagal dihapus');
			redirect('admin/ujian');
		}
	}

	public function edit_soal($id)
	{
		$data['soal'] = $this->M_ujian->getById($id);

		$this->load->view('admin/template/header');
		$this->load->view('admin/v_edit_soal',$data);
		$this->load->view('admin/template/footer');
	}

	public function soal($table)
	{

		$data['soal'] = $this->M_ujian->getAll2($table);

		$this->load->view('admin/template/header');
		$this->load->view('admin/v_edit_soal',$data);
		$this->load->view('admin/template/footer');
	}

	// public function create_tb($name, $ndata)
	// {
	// 	$this->M_ujian->create_table($name);
	// }	

	public function update_soal()
	{
	

				
			$ndata = $this->input->post('ndata');
			$nama_tb = $this->input->post('nama_tb');

			$data;
			for($i=1; $i<=$ndata; $i++)
			{
				for($j = 1; $j<=6; $j++)
				{
					
					$this->form_validation->set_rules('soal_'.$i," Soal no".$i." Masih kosong",'required');
					$this->form_validation->set_rules('jwb_'.$i.'_a'," Jawaban no".$i." Masih kosong",'required');
					$this->form_validation->set_rules('jwb_'.$i.'_b'," Jawaban no".$i." Masih kosong",'required');
					$this->form_validation->set_rules('jwb_'.$i.'_c'," Jawaban no".$i." Masih kosong",'required');
					$this->form_validation->set_rules('jwb_'.$i.'_d'," Jawaban no".$i." Masih kosong",'required');
					$this->form_validation->set_rules('radio_soal_'.$i," Jawaban benar no".$i." Masih kosong",'required');


					if($j == 1) $data[$i][$j] = $this->input->post('soal_'.$i);  
					if($j == 2) $data[$i][$j] = $this->input->post('jwb_'.$i.'_a'); 
					if($j == 3) $data[$i][$j] = $this->input->post('jwb_'.$i.'_b'); 
					if($j == 4) $data[$i][$j] = $this->input->post('jwb_'.$i.'_c'); 
					if($j == 5) $data[$i][$j] = $this->input->post('jwb_'.$i.'_d'); 
					if($j == 6) $data[$i][$j] = password_hash($this->input->post('radio_soal_'.$i), PASSWORD_DEFAULT);
					

				}
			}

		if($this->form_validation->run()==true)
		{
			$this->M_ujian->input_soal_to_tb($nama_tb, $ndata, $data);
			$this->session->set_flashdata('success_register','Data soal berhasil diinput');
			redirect('admin/ujian');
		}
		else
		{
			$this->session->set_flashdata('error',validation_errors());
			redirect('admin/ujian/');
		}
		
					
	}	
	
}

// for($j = 1; $j<=6; $j++)
// 			{
// 				if($j == 1) $data[$i][$j] = $this->input->post('soal');  
// 				if($j == 2) $data[$i][$j] = $this->input->post('jwb_'.$i.'_a'); 
// 				if($j == 3) $data[$i][$j] = $this->input->post('jwb_'.$i.'_b'); 
// 				if($j == 4) $data[$i][$j] = $this->input->post('jwb_'.$i.'_c'); 
// 				if($j == 5) $data[$i][$j] = $this->input->post('jwb_'.$i.'_d'); 
// 				if($j == 6) $data[$i][$j] = $this->input->post('radio_soal'.$i);
// 				echo $this->input->post('soal');

// 			}