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
class Model
{
        protected $db;
        public function __construct()
        {
            require "config/database.php";
            require_once "PHP_DB_Connection.lib.class.php";
            require "bootstrap.php";
            if($etat == 'on')
            {
                try {
                    $this->db = $entityManager;
                } catch (PDOException $th) {
                    $this->db = null;
                }  
            }
        }

        
    }
?>