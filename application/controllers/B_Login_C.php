<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_Login_C extends CI_Controller {

	public function __constuct()
    {
        parent::__constuct();
    }

	public function index()
	{
		$this->load->view('B_login');
	}

    public function authentified(){
        $this->load->model('B_Admin');

        $mdp = $this->input->post('mdp');
        $valid = $this->B_Admin->validLogin($mdp);
        if($valid){
            $this->load->view('B_home');
        }
    }

}
