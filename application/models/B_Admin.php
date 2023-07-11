
<?php 

class B_Admin extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function validLogin($mdp){
        $query = $this->db->get_where('admin', array('mdp' => sha1($mdp)));
        $result = $query->row();


        if($result == null){
            return false;
        }else{
            return true;
        }
    }
}

?>