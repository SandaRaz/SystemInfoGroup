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

        if($valid != 0 && $valid != NULL){
            $this->session->set_userdata('userid', $valid);
        }
        redirect(base_url('F_Login_C/connection'));
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
        $this->session->unset_userdata('userid');
        $this->load->view('choix_voloany');
    }

    public function pageinscription(){
        $this->load->view('F_inscri');
    }

    public function inscription1(){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nom','Nom', 'required');
        $this->form_validation->set_rules('prenom','Prenom', 'required');
        $this->form_validation->set_rules('datenaissance','Datenaissance', 'required');
        $this->form_validation->set_rules('email','Email', 'required|valid_email');
        $this->form_validation->set_rules('mdp','Datenaissance', 'required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('F_inscri');
        }else{
            $data = array(
                'nom'=> $this->input->post("nom"),
                'prenom'=>$this->input->post("prenom"),
                'date_de_naissance'=>$this->input->post("datenaissance"),
                'genre'=>$this->input->post("genre"),
                'email'=>$this->input->post("email"),
                'mdp'=>$this->input->post("mdp")
            );
            $this->session->set_userdata('tempinscridata', $data);
            $this->load->view('F_inscri_info_sante');
        }
    }

    public function inscription2(){
        $this->load->helper('url');
        $this->load->model('F_Client');
        $this->load->model('F_Compte');

        $this->load->library('form_validation');

        $this->form_validation->set_rules('taille','Taille', 'required');
        $this->form_validation->set_rules('poids','Poids', 'required');

        $dataSession = $this->session->userdata('tempinscridata');
        if($dataSession == null){
            redirect(base_url('F_Login_C/pageinscription'));
        }else if($this->form_validation->run() === FALSE){
            $this->load->view('F_inscri_info_sante');
        }else{
            $newid = $this->F_Client->inserer($dataSession);
            $data = array(
                'id_client'=>$newid,
                'taille'=>$this->input->post("taille"),
                'poids'=>$this->input->post("poids"),
                'dates' => date('Y-m-d')
            );
            $this->F_Client->insertInfoSante($data);

            $dataCompte = array(
                'id_client'=>$newid,
                'montant'=>80000
            );
            $this->F_Compte->insertNewCompte($dataCompte);

            $this->session->set_userdata('userid', $newid);
            redirect(base_url('F_Login_C/connection'));
        }
        
    }

}
