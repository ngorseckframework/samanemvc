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
    //class
    class Accueil extends Controller{

        public function __construct(){
            parent::__construct();
        }
        //methode ou url
        public function index(){
            //view
            $this->view->load("accueil/index");
        }
		public function add(){
            //view
            $this->view->load("accueil/add");
        }
    }
?>