<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class F_Profil_C extends CI_Controller {

	public function __constuct()
    {
        parent::__constuct();
    }

	public function index()
	{	
		$this->load->model('B_Code');
		$this->load->model('F_Client');
		$this->load->model('F_Compte');

		$userid = $this->session->userdata('userid');
		$client = $this->F_Client->getClientInfo($userid);
		$montant = $this->F_Compte->getMontantActuel($userid);
		$code=$this->B_Code->getListeCodeDejaUtilise();
		
		$data['client'] = $client;
		$data['montant'] = $montant;
		$data['codes']=$code;
		$this->load->view('F_profil', $data);
	}


}