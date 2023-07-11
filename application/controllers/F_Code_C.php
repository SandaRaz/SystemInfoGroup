<?php
     defined('BASEPATH') OR exit('No direct script access allowed');
     class F_Code_C extends CI_Controller{

        public function demandeCode(){

            $this->load->model('F_Code');
            $this->load->model('B_Code');

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

            $code=$this->input->post('credit');
            $id_client=$this->session->userdata('userid'); ;

            $dejaUtiliser=$this->B_Code->getListeCodeDejaUtilise();
            $codeExpirer=$this->B_Code->getListeCodeExpirer();
            $codeExiste=$this->F_Code->getAllCode();

            $exist=null;
            $verif_deja_utilise=null;
            $verif_expirer=null;

            for($i=0;$i<count($codeExiste);$i++){
               if($codeExiste[$i]['code']==$code){
                  $exist=$codeExiste[$i];
               }
            }

            for($i=0;$i<count($dejaUtiliser);$i++){
               if($dejaUtiliser[$i]['code']==$code){
                  $verif_deja_utilise=$dejaUtiliser[$i];
               }
            }

            for($i=0;$i<count($codeExpirer);$i++){
               if($codeExpirer[$i]['code']==$code){
                  $verif_expirer=$codeExpirer[$i];
               }
            }

            if($verif_expirer!=null){
               $this->load->view('F_profil',$data);

            } else if($verif_deja_utilise!=null){
               
               $this->load->view('F_profil',$data);

            }else if($exist==null){
               $this->load->view('F_profil',$data);
            }else{
               $dataA=array(
                  'id_code'=>$this->F_Code->getCodeById($id_client)[0]['id_code'],
                  'id_client'=>$id_client,
                  'dates'=> date('Y-m-d'),
                  'etat'=>5
               );
               
               
               $this->F_Code->demandeCode($dataA);
               $this->load->view('F_profil',$data);
            }


        }

     }
?>