<?php 
class Auth extends CI_Model 
{
	
	public function __construct()
	{
        parent::__construct();
	}


	

	function register($nik, $nama, $jk, $alamat, $no_tlp, $email, $jurusan, $password)
	{
		$data_user = array(
			'nik'=>$nik,
			'nama'=>$nama,
			'jk'=>$jk,
			'alamat'=>$alamat,
			'no_tlp'=>$no_tlp,
			'email'=>$email,
			'jurusan'=>$jurusan,
			'password'=>password_hash($password, PASSWORD_DEFAULT),
			
		);
		$this->db->insert('data_mhs',$data_user);
	}


	function login_user($username,$password)
	{
        $query = $this->db->get_where('data_mhs',array('nik'=>$username));
        if($query->num_rows() > 0)
        {
            $data_user = $query->row();
            if (password_verify($password, $data_user->password)) {
                $this->session->set_userdata('username',$username);
				$this->session->set_userdata('is_login',TRUE);
				$this->session->set_userdata('nama',$data_user->nama);
                return TRUE;
            } else {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
	}
	
    function cek_login()
    {
        if(empty($this->session->userdata('is_login')))
        {
			redirect('login');
		}
    }



}
?>


