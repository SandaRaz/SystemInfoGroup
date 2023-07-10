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

    public function authentified(){
        $this->load->model('F_Client');
        $this->load->helper('url');

        $email = $this->input->post('email');
        $mdp = $this->input->post('password');

        $valid = $this->F_Client->validLogin($email, $mdp);

        if($valid){
            $this->load->view('F_accueil');
        }else{
            echo "Noooooooooooooo";
        }

        
    }

}
