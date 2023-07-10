<?php 

class B_MvtSport extends CI_Models{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function inserer($data){
        $this->db->insert('mvt_physique', $data);
        return $this->db->insert_id();  // si 0 >> erreur
    }

    public function modifier($id,$data){
        $this->db->update('mvt_physique', $data, array('id_mvt'=>$id));
    }

    public function getAll(){
        $query = $this->db->get('mvt_physique');
        return $query->result();
    }
}

?>