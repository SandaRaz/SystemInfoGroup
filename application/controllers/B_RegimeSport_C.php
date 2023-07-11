<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class B_RegimeSport_C extends CI_Controller{
        public function __constuct()
        {
            parent::__constuct();
        }

        public function index(){
            $this->load->view('B_regime_alimentaire');
        }

        public function regimeSportif() {

            $this->load->model('B_RegimeSport');
            $this->load->model('B_MvtSport');
        
            $regS = $this->B_RegimeSport->getAll();
            $mvt = $this->B_MvtSport->getAll();
  
        
            $data['regS'] = $regS;
            $data['mvt'] = $mvt;

            $this->load->view('B_regime_sportif', $data);
        }

         public function ajoutmvt() {
            $this->load->model('B_MvtSport');
        
            $nom = $this->input->post('nom');

            $error = "";
        
            if ($nom == "") {
                $error = "Nom vide";
            }
        
            
                $data = array(
                    'id_mvt' => null,
                    'nom' => $nom,
                  
                );
                $this->B_MvtSport->inserer($data);
           
            echo json_encode($err);
        }


        public function ajoutRegimeS(){

            $this->load->model('B_RegimeSport');


            $libelle=$this->input->post('nomS');
            $action=$this->input->post('action');
            $benefice=$this->input->post('duree');

            $err=array();

            
                $data=array(
                    'libelle'=>$libelle,
                    'action'=>$action,
                    'valeur'=>$benefice,
                );
                $this->B_RegimeSport->inserer($data);
            
            echo json_encode($err);
        }

        public function ajoutSport(){

            $this->load->model('B_Sport');


            $sport=$this->input->post('sport');
            $mvt=$this->input->post('mvt');
            $duree=$this->input->post('duree');

            $err=array();

            
                $data=array(
                    'id_regime_sport'=>$sport,
                    'id_mvt'=>$mvt,
                    'duree'=>$duree,
                );
                $this->B_Sport->inserer($data);
            
            echo json_encode($err);
        }

    }
?>