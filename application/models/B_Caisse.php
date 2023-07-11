<?php 

class B_Caisse extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getMontantActuel(){
        $data=$this->db->get('Caisse')->row();
        return $data['montant'];
    }

    public function getListeRevenu($mois, $annee){
        $query = "SELECT id_caisse,SUM(benefice) as benefice,dates 
            FROM Mvt_Caisse
            WHERE MONTH(dates) = ? 
            AND YEAR(dates) = ?
            GROUP BY id_caisse,dates";
        $results = $this->db->query($query, array($mois, $annee));
        return $results;
    }

    public function getListeDepense($mois, $annee){
        $query = "SELECT id_caisse,SUM(depense) as depense,dates 
            FROM Mvt_Caisse
            WHERE MONTH(dates) = ? 
            AND YEAR(dates) = ?
            GROUP BY id_caisse,dates";
        $results = $this->db->query($query, array($mois, $annee));
        return $results;
    }
} 
    class B_Caisse extends CI_Model{
        public function __construct() {
            parent::__construct();
            $this->load->database();
        }

        public function getMontantActuel(){
            $data=$this->db->get('Caisse')->row();
            return $data['montant'];
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