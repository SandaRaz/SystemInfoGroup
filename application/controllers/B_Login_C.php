<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_Login_C extends CI_Controller {

	public function __constuct()
    {
        parent::__constuct();
        $this->load->model('B_Repas');
    }

	public function index()
	{
		$this->load->view('B_login');
	}

    public function authentified(){
        $this->load->view('B_home');
    }

    public function test(){
        $data=$this->B_Repas->getAllRepas();
        return $this->load->view('haha',$data);
    }

}
