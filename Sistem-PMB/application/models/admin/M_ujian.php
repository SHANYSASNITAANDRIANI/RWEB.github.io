<?php 
class M_ujian extends CI_Model 
{
    
    private $table = "soal_detail";
    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }


    public function getAll2($table)
    {
        return $this->db->get($table)->result();
    }

    public function add($jurusan, $nsoal, $status, $durasi, $nilai_minimal)
    {
        $data = array(
            'jurusan'=>$jurusan,
            'jumlah_soal'=>$nsoal,
            'status'=>$status,
            'lama_waktu'=>$durasi,
            'nilai_minimal'=>$nilai_minimal);
        $this->db->insert($this->table, $data);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->table, ["jurusan" => $id])->row();
    }

    public function getById2($id, $table)
    {
        return $this->db->get_where($table, ["id" => $id])->row();
    }   

    public function update($data,$id)
    {
        return $this->db->update($this->table, $data, array('id' => $id));
    }

      public function delete($id)
    {
        return $this->db->delete($this->table, array("jurusan" => $id));
    }

    public function create_table($name, $ndata, $nilai_minimal)
    {
        
        $query = "CREATE TABLE $name (
                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    soal VARCHAR(512), 
                    jawaban_1 VARCHAR(512),
                    jawaban_2 VARCHAR(512),
                    jawaban_3 VARCHAR(512),
                    jawaban_4 VARCHAR(512),
                    jawaban_benar VARCHAR(512),
                    temp VARCHAR(512),
                    temp2 VARCHAR(512)
                    )";
        $query2 = "INSERT INTO $name(soal, jawaban_1, jawaban_2, jawaban_3, jawaban_4, jawaban_benar, temp, temp2) VALUES";
        for($i=1; $i<=$ndata; $i++)
        {
            $query2.= "('','','','','','','".$name."','".$nilai_minimal."')";
            if($i!=$ndata) $query2.=","; 

        }
        $this->db->query($query);
        $this->db->query($query2);
    }

    // public function input_soal_to_tb($nama_tb, $ndata, $array)
    // {
        

    //     $query = "INSERT INTO $nama_tb (soal, jawaban_1, jawaban_2, jawaban_3, jawaban_4, jawaban_benar) VALUES";
        
    //     for($i=1; $i<=$ndata; $i++)
    //     {
    //         $query.="('".$array[$i][1]."','".$array[$i][2]."','".$array[$i][3]."','".$array[$i][4]."', '".$array[$i][5]."', '".$array[$i][6]."')";
    //         if($i!=$ndata) $query.=","; 
    //     }
        
        
    //     $this->db->query($query);        
    // }

    function delete_tb($name_tb)
    {
        $query = "DROP TABLE ".$name_tb;
        $this->db->query($query);
    }

     public function input_soal_to_tb($nama_tb, $ndata, $array)
    {
        for($i=1; $i<=$ndata; $i++)
        {
            
             $query = "UPDATE $nama_tb SET soal='".$array[$i][1]."', jawaban_1='".$array[$i][2]."', jawaban_2='".$array[$i][3]."', jawaban_3='".$array[$i][4]."',jawaban_4='".$array[$i][5]."',jawaban_benar='".$array[$i][6]."' WHERE id=$i";
             $this->db->query($query); 
        }
        
        
        $this->db->query($query);        
    }

}