<?php

class B_TableBoard_C extends CI_Controller{
    public function __constuct()
    {
        parent::__constuct();
        $this->load->model('B_Caisse');
    }

    public function index(){
        
    }

    public function listesRevenus($mois, $annee){
        $revenus = $this->B_Caisse->getListeRevenu($mois,$annee);
    }

    public function listesDepenses($mois, $annee){
        $depenses = $this->B_Caisse->getListeDepense($mois,$annee);
    }
}

?>