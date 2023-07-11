<?php
    class F_Code extends CI_Model{

        public function __construct() {
            parent::__construct();
            $this->load->database();
        }

        public function inserCode($data){
            $this->db->insert('Code', $data);
        }

        public function demandeCode($data){
            return $this->db->insert('Demande_code', $data);
        }

        public function getCodeById($id){
            $this->db->where('id_code',$id);
            return $this->db->get('Code')->result_array();
        }
        public function getAllCode(){
            return $this->db->get('Code')->result_array();
        }

    }
?>