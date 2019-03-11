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
    namespace src\entities;
    class Test
    {
        private $id;
        private $valeur1;
        private $valeur2;

        public function getId()
        {
            return $this->id;
        }
		public function setId($id)
        {
            $this->id = $id;
        }
        
        public function getValeur1()
        {
            return $this->valeur1;
        }
		public function setValeur1($valeur1)
        {
            $this->valeur1 = $valeur1;
        }

        public function getValeur2()
        {
            return $this->valeur2;
        }
		public function setValeur2($valeur2)
        {
            $this->valeur2 = $valeur2;
        }
    }
?>