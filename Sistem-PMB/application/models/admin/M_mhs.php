<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_mhs extends CI_Model
{
    private $table = "data_mhs";
    

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }


    public function getById($nik)
    {
        return $this->db->get_where($this->table, ["nik" => $nik])->row();
    }

    public function update($data,$nik)
    {
        return $this->db->update($this->table, $data, array('nik' => $nik));
    }


    
    function save($nik, $nama, $jk, $alamat, $no_tlp, $email, $jurusan, $password)
    {
        $data_user = array(
            'nik'=>$nik,
            'nama'=>$nama,
            'status'=>1,
            'jk'=>$jk,
            'alamat'=>$alamat,
            'no_tlp'=>$no_tlp,
            'email'=>$email,
            'jurusan'=>$jurusan,
            'password'=>password_hash($password, PASSWORD_DEFAULT),
            
        );
        $this->db->insert('data_mhs',$data_user);
    }

     public function delete($nik)
    {
        return $this->db->delete($this->table, array("nik" => $nik));
    }
  
}