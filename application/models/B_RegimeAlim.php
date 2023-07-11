<?php

class B_RegimeAlim extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getRegimeAlim(){
        return $this->db->get('Regime_Alimentaire')->result_array();
    }

    public function getRegimeAlimByAction($action){
        $this->db->where('action',$action);
        return $this->db->get('Regime_Alimentaire')->result();
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

    public function insererRegAlim($data){
        $this->db->insert('RegimeMenu', $data);
    }

    public function regimeDetaillee(){
        $query = "";
    }
    
    public function dateplus($date, $jours) {
        $nouvelleDate = date('Y-m-d', strtotime($date . ' +'.$jours.' days'));
        return $nouvelleDate;
    }
    
    public function getIdRegimebyPoids($id_client, $poidInitial, $poidFinal) {
        $difference = $poidFinal - $poidInitial;
        $action = ($difference < 0) ? -1 : 1;
    
        $regimesAlim = $this->getRegimeAlimByAction($action);
        $indiceAlea = rand(0, count($regimesAlim) - 1);
        $regimeAlim = $regimesAlim[$indiceAlea];
    
        return $regimeAlim;
    }
    
}

?>