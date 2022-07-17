<?php 
class M_auth extends CI_Model 
{
    
    public function __construct()
    {
        parent::__construct();
    }


    

    function register($nik, $nama, $username, $password)
    {
        $data_user = array(
            'nik'=>$nik,
            'nama'=>$nama,
            'username'=>$username,
            'password'=>password_hash($password, PASSWORD_DEFAULT),
            
        );
        $this->db->insert('user_admin',$data_user);
    }


    function login_user($username,$password)
    {
        $query = $this->db->get_where('user_admin',array('username'=>$username));
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
            redirect('admin/login');
        }
    }



}
?>


