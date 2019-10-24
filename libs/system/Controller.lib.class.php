<?php
/*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODELE ET FAITES MOI UN RETOUR
    POUR TOUTE MODIFICATION VISANT A L'AMELIORER.
    VOUS ETES LIBRE DE TOUTE UTILISATION.
  ===================================================*/
namespace libs\system;
use libs\system\View;

class Controller{
        protected $view;
        public function __construct(){
            $this->view = new View();
        }
    }
?>