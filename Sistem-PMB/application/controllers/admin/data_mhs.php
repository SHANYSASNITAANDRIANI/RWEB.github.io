<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_mhs extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_mhs');
	}

	public function tampil()
	{
		echo "B";
	}

	function edit($nik)
	{
		
		$data['mhs'] = $this->M_mhs->getById($nik);
		$this->load->view('admin/template/header');
		$this->load->view('admin/v_edit',$data);
		$this->load->view('admin/template/footer');
	}

	function update()
	{
		$this->form_validation->set_rules('no_tlp', 'No telfon','trim|required|alpha_numeric');
		$this->form_validation->set_rules('nama', 'Nama','required');
		$this->form_validation->set_rules('alamat', 'Alamat','required');
		$this->form_validation->set_rules('email', 'Email','required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin','required');
		$this->form_validation->set_rules('jurusan', 'Jurusan','required');
		
		
		
		if ($this->form_validation->run()==true)
        {
			
			$nik = $this->input->post('nik');
			
			$data['nama'] = $this->input->post('nama');
			$data['status'] = $this->input->post('status');
		
			$data['jk'] = $this->input->post('jk');
			$data['alamat'] = $this->input->post('alamat');
			$data['no_tlp'] = $this->input->post('no_tlp');
			$data['email'] = $this->input->post('email');
			$data['jurusan'] = $this->input->post('jurusan');
			$this->M_mhs->update($data, $nik);
			$this->session->set_flashdata('success_register','Data berhasil diupdate');
			redirect('admin/read_data');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
		redirect('admin/read_data');
		}
	}

	function delete($nik)
	{
		$this->M_mhs->delete($nik);
		$this->session->set_flashdata('success_register','Data berhasil dihapus');
		redirect('admin/read_data');

	}
}