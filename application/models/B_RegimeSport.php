<?php 

class B_RegimeSport extends CI_Models{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function insertRegimeSport($libelle, ){
        $this->db->insert('regime_sportive', array('libelle'=> $libelle,));
    }
}

?>