<?php

class B_Plat extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getAllPlat(){
        return $this->db->get('Plat')->result_array();
    }

    public function getPlatById($id){
        $this->db->where('id_plat',$id);
        return $this->db->get('Plat')->row_array();
    }

    public function createPlat($data){
        return $this->db->insert('Plat',$data);
    }

    public function updatePlat($id,$data){
        $this->db->where('id_plat', $id);
        return $this->db->update('plat', $data);
    }

    public function deletePlat($id){
        $this->db->where('id_plat', $id);
        return $this->db->delete('plat');
    }

    public function getAllEntrer() {
        $this->db->where('categorie', 1);
        $query = $this->db->get('Plat');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array();
        }
    }
    

    public function getAllResistance() {
        $this->db->where('categorie', 2);
        return $this->db->get('Plat')->result_array();
    }

    public function getAllDessert() {
        $this->db->where('categorie', 3);
        return $this->db->get('Plat')->result_array();
    }

}

?>