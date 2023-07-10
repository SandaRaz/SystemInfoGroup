<?php

class F_Client extends CI_Model{
    
    public function __constuct()
    {
        parent::__constuct();
        $this->load->database();
    }

    public function insertPoids($id_client, $newPoid) {
        $data = array(
            'poids' => $newPoid,
            'dates' => date('Y-m-d')
        );
        return $this->db->insert('historique_poid', $data);
    }

    public function getCompte($id_client){
        $this->db->where('id_client',$id_client);
        $query=$this->db->get('Compte');
        return $query->row();
    }

    public function getNombreClient(){
        $query="SELECT count(id_client) as nb From Client";
        $result=$this->db->query($query);
        return $result->nb;
    }

}

?>