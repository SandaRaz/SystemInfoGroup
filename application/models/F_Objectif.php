<?php 

class F_Objectif extends CI_Model{
    public function __constuct()
    {
        parent::__constuct();
        $this->load->database();
    }

    public function getAllObjectifs($idclient){
        $query = $this->db->get_where('Objectif', array('id_client' => $idclient));
        $result = $query->result();
        return $result;
    }

    public function createObjectif($data){
        return $this->db->insert('Objectif',$data);
    }

}