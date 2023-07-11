<?php 

class F_Client extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
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

    public function getClientInfo($idclient){
        $query = "SELECT hp.id_client, c.nom,c.prenom,c.date_de_naissance,c.genre,c.taille,c.email,hp.poids,max(dates) as dates 
        FROM Historique_poids as hp
        JOIN Client as c ON c.id_client = hp.id_client
        WHERE hp.id_client = ?";

        $result = $this->db->query($query, array($idclient));
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return null;
        }
    }

    public function insertPoids($id_client, $newPoid) {
        $data = array(
            'poids' => $newPoid,
            'dates' => date('Y-m-d')
        );
        return $this->db->insert('historique_poid', $data);
    }

    public function getCompte($id_client){
        $this->db->where('id_client',$id_client);
        $query=$this->db->get('Compte');
        return $query->row();
    }

    public function getNombreClient(){
        $query="SELECT count(id_client) as nb From Client";
        $result=$this->db->query($query);
        return $result->nb;
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

}

?>