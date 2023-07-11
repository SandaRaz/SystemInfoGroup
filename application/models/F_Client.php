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
        $this->db->update('Mvt_physique', $data, array('id_mvt'=>$id));
    }

    public function getAll(){
        $query = $this->db->get('Mvt_physique');
        return $query->result();
    }

    public function getClientInfo($idclient){
        $query = "SELECT c.id_client, c.nom, c.prenom, c.date_de_naissance, c.genre, c.taille, c.email, ids.poids, MAX(ids.dates) AS dates
        FROM information_de_sante AS ids
        JOIN Client AS c ON c.id_client = ids.id_client
        WHERE c.id_client = ?";

        $result = $this->db->query($query, array($idclient));
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return null;
        }
    }

    public function insertInfoSante($data) {
        return $this->db->insert('informations_de_sante', $data);
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
        $query = $this->db->get_where('Client', array('email'=>$mailnom , 'mdp'=>sha1($mdp)));
        $result = $query->row();

        if(count($result1) == null){
            return 0;
        }else{
            return $result->id_client;
        }
    }

}

?>