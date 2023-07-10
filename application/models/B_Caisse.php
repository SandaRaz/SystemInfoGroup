<?php 

class B_Caisse extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getListeRevenu($mois, $annee){
        $query = "SELECT *, (benefice - depense) as revenu
              FROM Mvt_Caisse 
              WHERE benefice > depense 
              AND MONTH(dates) = ? 
              AND YEAR(dates) = ?";
        $result = $this->db->query($query, array($mois, $annee));
    }

    public function getListeDepense($mois, $annee){
        $query = "SELECT *, (benefice - depense) as depense
              FROM Mvt_Caisse 
              WHERE benefice < depense 
              AND MONTH(dates) = ? 
              AND YEAR(dates) = ?";
        $result = $this->db->query($query, array($mois, $annee));
    }

}

?>