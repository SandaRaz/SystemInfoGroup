<?php 
    class B_Caisse extends CI_Model{
        public function __construct() {
            parent::__construct();
            $this->load->database();
        }

        public function getMontantActuel(){
            $data=$this->db->get('Caisse')->row();
            return $data['montant'];
        }

        
    }
?>