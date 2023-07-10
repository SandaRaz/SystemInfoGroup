<?php 

class F_Client extends CI_Models{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function validLogin($mailnom,$mdp){
        $query1 = $this->db->get_where('client', array('email'=>$mailnom , 'mdp'=>$mdp));
        $result1 = $query1->row();

        $query2 = $this->db->get_where('client', array('nom'=>$mailnom , 'mdp'=>$mdp));
        $result2 = $query2->row();

        if(count($result1) <= 0 && count($result2) <= 0){
            return false;
        }else{
            return true;
        }
    }

    public function inserer($data){
        $this->db->insert('client', $data);
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