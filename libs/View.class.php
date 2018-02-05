<?php
/*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngosecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    POUR TOUTE MODIFICATION VISANT A AMELIORER
    CE MODELE.
    VOUS ETES LIBRE DE TOUTE UTILISATION.
  ===================================================*/

class View{
        public function __construct(){
        }
        public function load(){
            $num = func_num_args();
            $args = func_get_args();
            switch($num){
                case 1:
                    $this->charger($args[0]);
                    break;
                case 2:
                    $this->chargerDonnees($args[0], $args[1]);
                    break;
            }
        }
        private function charger($page){
            require_once 'view/' . $page . '.php';
        }
        private function chargerDonnees($page, $data){
            extract($data);
            require_once 'view/' . $page . '.php';
        }
    }
?>