<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_Login_C extends CI_Controller {

	public function index()
	{
		$this->load->view('B_login');
	}

    public function authentified(){
        $this->load->view('B_home');
    }

}
