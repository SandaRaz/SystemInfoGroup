<?php
    class F_Code extends CI_Model{
        
        public function __construct() {
            parent::__construct();
            $this->load->database();
        }

        public function demandeCode($idClient){
            $data=array(
                'id_client'=>$idClient
            );
            return $this->db->insert('Demande_code', $data);
        }

    }
?>