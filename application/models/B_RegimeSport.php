<?php 

class B_RegimeSport extends CI_Models{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function inserer($libelle,$action,$valeur){
        $this->db->insert('regime_sportive', array('libelle'=> $libelle, 'action'=>$action, 'valeur'=>$valeur));
        return $this->db->insert_id();  // si 0 >> erreur
    }

    public function modifier($id,$libelle,$action,$valeur){
        $this->db->update('regime_sportive', array('libelle'=>$libelle,'action'=>$action, ), array('id_regime_sport'=>$id))
    }
}

?>