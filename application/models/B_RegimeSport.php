<?php 

class B_RegimeSport extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function inserer($data){
        $this->db->insert('regime_sportive', $data);
        return $this->db->insert_id();  // si 0 >> erreur
    }

    public function modifier($id,$data){
        $this->db->update('regime_sportive', $data, array('id_regime_sport'=>$id));
    }

    public function getAll(){
        $query = $this->db->get('regime_sportive');
        return $query->result();
    }

    public function getById($id_regime_sport){
        $query = $this->db->get_where('regime_sportive', array('id_regime_sport'=>$id_regime_sport));
        return $query->row();
    }
}

?>