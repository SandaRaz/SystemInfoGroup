<?php 

class B_Sport extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function inserer($data){
        $this->db->insert('sport', $data);
        return $this->db->insert_id();  // si 0 >> erreur
    }

    public function inserermvt($data){
        return $this->db->insert('mvt_physique',$data);
    }

    public function modifier($id_regime_sport,$data){
        $this->db->update('sport', $data, array('id_regime_sport'=>$id_regime_sport));
    }

    public function getAll($id_regime_sport){
        $query = $this->db->get_where('sport', array('id_regime_sport'=>$id_regime_sport));
        return $query->result();
    }
}

?>