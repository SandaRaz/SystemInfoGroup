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
    }
?>