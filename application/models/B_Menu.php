<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_Menu extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getAllMenu(){
        return $this->db->get('Menu')->result_array();
    }

    public function getMenuById($id){
        $this->bd->where('id_Menu',$id);
        return $this->db->get('Menu')->row_array();
    }

    public function createMenu($data){
        return $this->db->insert('Menu',$data);
    }

    public function updateMenu($id,$data){
        $this->db->where('id_menu', $id);
        return $this->db->update('Menu',$data);
    }

    public function deleteMenu($id){
        $this->db->where('id_menu', $id);
        return $this->db->delte('menu');
    }

}

?>