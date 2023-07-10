<?php

class B_Repas extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function getAllRepas(){
        return $this->db->get('Repas')->result_array();
    }

    public function getRepasById($id){
        $this->bd->where('id_repas',$id);
        return $this->db->get('Repas')->row_array();
    }

    public function createRepas($data){
        return $this->db->insert('Repas',$data);
    }

    public function updateRepas($id,$data){
        $this->db->where('id_repas', $id);
        return $this->db->update('Repas',$data);
    }

    public function deleteRepas($id){
        $this->db->where('id_repas', $id);
        return $this->db->delte('Repas');
    }

}

?>