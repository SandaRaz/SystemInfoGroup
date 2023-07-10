<?php 

class B_Code extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getListeDemande(){
        $query = "SELECT 
        FROM client as c 
        JOIN Demande_code as dc 
        ON dc.id_code=c.id_client";
    }
}

?>