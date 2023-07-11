<?php 

class B_Code extends CI_Model{

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getListeDemande() {
        $this->db->select('c.id_client, dc.id_code, c.nom, c.prenom, dc.dates, dc.etat')
                 ->from('client as c')
                 ->join('Demande_code as dc', 'c.id_client = dc.id_client')
                 ->where('dc.etat', 5);
    
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function getListeCodeDejaUtilise() {
        $this->db->select('c.id_code, c.code, c.valeur, dc.id_client, dc.dates, dc.etat')
                 ->from('Code as c')
                 ->join('Demande_code as dc', 'c.id_code = dc.id_code')
                 ->where('dc.etat', 10);
        $query = $this->db->get();
        
        return $query->result_array();
    } 

    public function getListeCodeExpirer() {
        $this->db->select('c.id_code, c.code, c.valeur, dc.id_client, dc.dates, dc.etat')
                 ->from('Code as c')
                 ->join('Demande_code as dc', 'c.id_code = dc.id_code')
                 ->where('dc.etat', 0);
        $query = $this->db->get();
        return $query->result_array();
    } 

    public function validerCode($id_code, $id_client) {
        $this->db->where('id_code', $id_code)
                 ->where('id_client', $id_client)
                 ->update('demande_code', array('etat' => 10));
    
        $this->db->where('id_code', $id_code)
                 ->where('id_client !=', $id_client)
                 ->update('demande_code', array('etat' => 0));
    }

}

?>