<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_RegimeAlim extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getRegimeAlim(){
        return $this->db->get('Regime_Alimentaire')->result_array();
    }

    public function getRegimeAlimbyId($id){
        $this->db->where('id_regime_Alime', $id);
        return $this->db->get('Regime_Alimentaire')->row_array();
    }

    public function createRegimeAlime($data){
        return $this->db->insert('Regime_Alimentaire', $data);
    }

    public function updateRegimeAlim($id,$data){
        $this->db->where('id_regime_Alime', $id);
        return $this->db->update('Regime_Alimentaire', $data);
    }
    
    public function deleteRegimeAlim($id){
        $this->db->where('id_regime_Alime', $id);
        return $this->db->delete('Regime_Alimentaire');
    }
    
}

?>