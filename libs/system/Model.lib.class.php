<?php
/*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    POUR TOUTE MODIFICATION VISANT A AMELIORER
    CE MODELE.
    VOUS ETES LIBRE DE TOUTE UTILISATION.
  ===================================================*/
namespace libs\system;
class Model{
        protected $db;
        public function __construct(){
            if(connexion_params()['etat'] == 'on')
            {
                require_once "PHP_DB_Connection.lib.class.php";
                $this->db = getConnexion();
            }
        }

        
    }
?>