<?php
    class B_Graphe extends CI_Model{
        public function __construct() {
            parent::__construct();
        }

        function nombredejour($mois, $annee) {
            $nombreJours = cal_days_in_month(CAL_GREGORIAN, $mois, $annee);
            return $nombreJours;
        }

    }
?>