<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_RegimeAlim extends CI_Model {
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

}

?>