<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class B_RegimeAlim_C extends CI_Controller{
        public function __constuct()
        {
            parent::__constuct();
        }

        public function regimeAlimentaire() {
            $this->load->model('B_Plat');
            $this->load->model('B_Repas');
        
            $entrer = $this->B_Plat->getAllEntrer();
            $resistance = $this->B_Plat->getAllResistance();
            $dessert = $this->B_Plat->getAllDessert();
            $ptdej = $this->B_Repas->getPDejeuner();
            $dej = $this->B_Repas->getDejeuner();
            $din = $this->B_Repas->getDinner();
        
            $data['entrer'] = $entrer;
            $data['resistance'] = $resistance;
            $data['dessert'] = $dessert;
            $data['ptdej'] = $ptdej;
            $data['dej'] = $dej;
            $data['din'] = $din;
        
            $this->load->view('B_regime_alimentaire', $data);
        }
        
        public function ajoutPlat() {
            $this->load->model('B_Plat');
        
            $nom = $this->input->post('nom');
            $categorie = $this->input->post('categorie');
            $calorie = $this->input->post('calorie');
        
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
                    'nom' => $nom,
                    'categorie' => $categorie,
                    'calorie' => $calorie
                );
                $this->B_Plat->createPlat($data);
            }
            echo json_encode($err);
        }


        public function ajoutRepas() {
            $this->load->model('B_Repas');
        
            $types = $this->input->post('types');
            $id_entrer = $this->input->post('id_entrer');
            $id_resistance = $this->input->post('id_resistance');
            $id_dessert = $this->input->post('id_dessert');
            $nom = $this->input->post('nom_repas');
        
            $err = array();
        
            
                $data = array(
                    'id_repas' => null,
                    'types' => $types,
                    'id_entrer' => $id_entrer,
                    'id_resistance' => $id_resistance,
                    'id_dessert' => $id_dessert,
                    'nom_repas' => $nom
                );
        
                $query_result = $this->B_Repas->createRepas($data);
                if (!$query_result) {
                    $err['error'] = $this->db->error();
                }
            echo json_encode($err);
        }
        
        public function ajoutMenu() {
            $this->load->model('B_Menu');
        
            $id_pdej = $this->input->post('idpdej');
            $id_dej = $this->input->post('iddej');
            $id_din = $this->input->post('iddin');
            $nom = $this->input->post('nom_menu');
        
            $err = array();
        
            
                $data = array(
                    'id_menu' => null,
                    'libelle' => $nom,
                    'id_Pdeg' => $id_pdej,
                    'id_Deg' => $id_dej,
                    'id_Diner' => $id_din
                );
        
                $query_result = $this->B_Menu->createMenu($data);
                if (!$query_result) {
                    $err['error'] = $this->db->error();
                }
            echo json_encode($err);
        }

        public function ajoutRegime(){

            $this->load->model('B_RegimeAlim');
            $libelle=$this->input->post('libelle');
            $action=$this->input->post('action');
            $benefice=$this->input->post('duree');
            $prix=$this->input->post('prix');

            $err=array();

            if($prix<1){
                $err['error']="Prix devrait pas etre superieur a 0";
            }else{
                $data=array(
                    'libelle'=>$libelle,
                    'action'=>$action,
                    'benefice'=>$benefice,
                    'prix'=>$prix
                );
                $this->B_RegimeAlim->createRegimeAlime($data);
            }
            echo json_encode($err);
        }

        public function page(){

            $this->load->view('B_regime_alimentaire');
        }

        public function page2(){

            $this->load->view('B_regime_sportif');
        }

        public function page_chart(){

            $this->load->view('B_statistique');
        }
    }
?>