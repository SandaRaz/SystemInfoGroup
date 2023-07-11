<?php 

class F_Objectif extends CI_Model{
    public function __constuct()
    {
        parent::__constuct();
        $this->load->database();
    }

    public function getAllObjectif($idclient){
        $query = "SELECT * FROM Objectif 
        WHERE id_objectif = (SELECT Max(id_objectif) as max_id FROM Objectif)
        AND id_client = ?";
        $result = $this->db->query($query, $idclient);
        return $result->result();
    }

    public function createObjectif($data){
        return $this->db->insert('Objectif',$data);
    }

}