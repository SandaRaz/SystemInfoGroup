<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_Login_C extends CI_Controller {

	public function index()
	{
		$this->load->view('B_login');
	}

    public function retour(){
        $this->load->view('choix_voloany');
    }

    public function authentified(){
        $this->load->model('B_Admin');
        $this->load->helper('url');

        $mdp = $this->input->post('mdp');
        $valid = $this->B_Admin->validLogin($mdp);
        if($valid){
            $this->session->set_userdata('sessionmdp', sha1($mdp));
            redirect(base_url('B_Login_C/connection'));
        }
    }

    public function connection(){
        $this->load->helper('url');
        
        $sessionMdp = $this->session->userdata('sessionmdp');
        if($sessionMdp == null){
            redirect(base_url('B_Login_C'));
        }else{
            $this->load->view('B_statistique');
        }
    }

    public function deconnexion(){
        $this->session->unset_userdata('sessionmdp');
        $this->load->view('choix_voloany');
    }

}
