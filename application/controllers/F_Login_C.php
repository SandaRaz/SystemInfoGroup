<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class F_Login_C extends CI_Controller {

	public function __constuct()
    {
        parent::__constuct();
    }

	public function index()
	{
		$this->load->view('B_login');
	}

    public function authentified(){
        $this->load->view('B_home');
    }

}