<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_profil extends CI_Model
{
		 public function getAll()
    {
    	$table = 'data_mhs';
        return $this->db->get($table)->result();
    }
	
}