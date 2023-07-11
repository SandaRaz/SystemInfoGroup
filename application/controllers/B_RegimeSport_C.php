<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class B_RegimeAlim_C extends CI_Controller{
        public function __constuct()
        {
            parent::__constuct();
        }

        public function index(){
            $this->load->view('B_regime_alimentaire');
        }

        public function regimeSportif() {
            $this->load->view('B_regime_sportif');
        }

         public function ajoutmvt() {
            $this->load->model('B_Sport');
        
            $nom = $this->input->post('nom');

            $error = "";
        
            if ($nom == "") {
                $error = "Nom vide";
            } else if ($categorie > 3 || $categorie < 1) {
                $error = "Erreur de Catégorie";
            } else if ($calorie == 0) {
                $error = "Erreur de Calorie";
            }
        
            if (!empty($error)) {
                $err['error'] = $error;
            } else {
                $data = array(
                    'id_mvt' => null,
                    'nom' => $nom,
                  
                );
                $this->B_Sport->inserermvt($data);
            }
            echo json_encode($err);
        }
    }
?>