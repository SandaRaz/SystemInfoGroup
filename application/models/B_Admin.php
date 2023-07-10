
<?php 

class B_Admin extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function checkLogin($data){
        $query = $this->db->get_where('')
    }
}

?>