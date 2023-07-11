<?php
    class F_Compte extends CI_Model{
        public function __constuct()
        {
            parent::__constuct();
            $this->load->database();
        }

        public function updateCompte($id_client,$newSolde){
            $data = array(
                'montant' => $newSolde,
            );
            $this->db->where('id_client', $id_client);
            return $this->db->update('Compte',$data);
        }

        public function getMontantActuel($id_client){
            $query="SELECT montant FROM Compte WHERE id_client=?";
            $result = $this->db->query($query, $id_client);
            return $result->row();
        }

        public function getMvtCompte($compte){
            $this->db->where('id_compte',$compte->id_compte);
            return $this->db->get('Mvt_compte')->result_array();
        }

        public function insertNewCompte($data){
            $this->db->insert('Compte', $data);
        }
        
    }
?>