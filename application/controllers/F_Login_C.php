<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class F_Login_C extends CI_Controller {

	public function __constuct()
    {
        parent::__constuct();
    }

	public function index()
	{
		$this->load->view('F_login');
	}

    public function retour(){
        $this->load->view('choix_voloany');
    }

    public function authentified(){
        $this->load->model('F_Client');
        $this->load->helper('url');

        $email = $this->input->post('email');
        $mdp = $this->input->post('password');

        $valid = $this->F_Client->validLogin($email, $mdp);

        if($valid =! 0){
            $this->session->set_userdata('userid', $valid);
            redirect(base_url('F_Login_C/connection'));
        }else{
            echo "Noooooooooooooo misy erreur";
        }
    }

    public function connection(){
        $this->load->helper('url');

        $userid = $this->session->userdata('userid');
        if($userid == null){
            redirect(base_url('F_Login_C'));
        }else{
            $this->load->view('F_accueil');
        }
    }

    public function deconnexion(){
        $this->session->unset_userdata('usermail');
        $this->load->view('choix_voloany');
    }

}
