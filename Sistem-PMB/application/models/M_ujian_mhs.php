<?php 
class M_ujian_mhs extends CI_Model 
{	
	 public function getById($nama_tb)
    {
    	
        $this->db->get_where('soal_detail', ["jurusan" => $nama_tb])->row();
       //return $this->db->query("SELECT nilai_minimal FROM soal_detail WHERE jurusan ='.$nama_tb.' ");
       
    }

     public function getById2($nama_tb, $i)
    {
        
        $this->db->get_where($nama_tb, ["id" => $i])->row();
       //return $this->db->query("SELECT nilai_minimal FROM soal_detail WHERE jurusan ='.$nama_tb.' ");
       
    }
     public function getAll()
    {
    	$table = 'soal_detail';
        return $this->db->get($table)->result();
    	// $query = "SELECT * FROM soal_detail WHERE status = 1";
    	// return $this->db->query($query);
    }

    // public function getnilaiminimal()
    // {
    //     $table = 'soal_detail';
    // }

   



    public function hitung_nilai($data, $ndata, $nama_tb)
    {
        $query = $this->db->get($nama_tb);
        $r = $query->num_rows();
        $nilai_point = 100/$query->num_rows();

        $nilai_tot = 0;

        
        for($i=1; $i<=$r; $i++)
        {
            $query = $this->db->query("SELECT jawaban_benar FROM $nama_tb WHERE id = '".$i."' ");
            $row = $query->row();
            $hash = $row->jawaban_benar;
            $cek_hash=password_verify($data[$i], $hash);
            

            // echo 'jawaban database ke '.$i.' = '.$hash;
            // echo "<br>";
            // echo 'jawaban input ke '.$i. '='.$data[$i];
            // echo "<br>";

            if($cek_hash==true)
            {
                $nilai_tot +=$nilai_point; 
            }
          
            
            // echo 'i ke '.$i.'data = '.$data[$i];
            // echo "<br>";
            // echo 'i ke '.$i.'hash = '.$tes;
            // echo "<br>";
        }
        return $nilai_tot;

    }

    



}

	

	
?>


