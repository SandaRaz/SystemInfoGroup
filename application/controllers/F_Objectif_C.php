<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class F_Objectif_C extends CI_Controller{

        public function V_Objectif()
        {
            $this->load->view('F_objectif');
        }

        public function ajoutObjectif(){
            $this->load->model('F_Client');
            $this->load->model('B_RegimeAlim');
            $this->load->model('B_RegimeSport');
            $this->load->model('F_Objectif');

            $Pobjectif=$this->input->post('objectif');
            $id_client=$this->input->post('id_client');

            $client=$this->F_Client->getClientInfo($id_client);

            $Pactuel=$client->poids;

            $difference=$Pobjectif-$Pactuel;

            var_dump($difference);

            $action=0;
            if($difference<0){
                $action=-1;
            }else
            {
                $action=1;
            }
            //-----------------regime alimentaire----------------------------------
            $regimesAlim=$this->B_RegimeAlim->getRegimeAlimByAction($action);
            $indiceAlea=rand(0, count($regimesAlim) - 1);
            $regimeAlim=$regimesAlim[$indiceAlea];
            
            //----------------regime sportive-------------------------------------
            $regimesSports=$this->B_RegimeSport->getRegimeSportByAction($action);
            $indiceAleaS=rand(0, count($regimesSports) - 1);
            $regimeSport=$regimesSports[$indiceAleaS];

            $nombrejour=(abs($difference)*$regimeAlim->duree)/$regimeAlim->valeur;
            
            $nombrejour=intval($nombrejour);
    

            $dateInitiale = date('Y-m-d');
            $nouvelleDate = $this->B_RegimeAlim->dateplus($dateInitiale,5);

            $data=array(
                'id_client'=>$id_client,
                'poids_final'=>$Pobjectif,
                'date_debut'=>$dateInitiale,
                'date_fin'=>$nouvelleDate,
                'id_regime_Alime'=>$regimeAlim->id_regime_Alime,
                'id_regime_sport'=>$regimeSport->id_regime_sport
            );

            $this->F_Objectif->createObjectif($data);

            $this->load->view('F_accueil');

        }

    }
?>