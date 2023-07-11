<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class F_Regime_C extends CI_Controller {

	public function __constuct()
    {
        parent::__constuct();
    }

	public function index()
	{
		$this->load->view('F_regime');
	}

}