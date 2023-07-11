<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class F_PropRegime_C extends CI_Controller {

	public function __constuct()
    {
        parent::__constuct();
    }

	public function index()
	{
		$this->load->model('F_Objectif');

		$userid = $this->session->userdata('userid');
		$objectif = $this->F_Objectif->getAllObjectif($userid);
		

		$this->load->view('F_mes_regimes');
	}

}