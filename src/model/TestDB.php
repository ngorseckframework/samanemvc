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
	namespace src\model; 
	
	use libs\system\Model; 
	//Ici Test est une entite c'est a dire une classe
	use src\entities\Test;
	  
    class TestDB extends Model{
		
		//La base de données samane_test est dans src/view/test
		//Pour tester importer la 
        public function __construct(){
            parent::__construct();
        }

        public function getTest($ID)
        {
            $sql = "SELECT *
                     FROM test
                     WHERE test.ID = ".$ID;
            if($this->db != null)
			{
				return $this->db->query($sql)->fetch();
			}else{
				return null;
			}
        }
		
		public function addTest($test){
			$sql = "INSERT INTO test VALUES(null, '".$test->getValeur1()."', '".$test->getValeur2()."')";
			if($this->db != null)
			{
				$this->db->exec($sql);
				return $this->db->lastInsertId();//Si la clé primaire est auto_increment
											 //sinon return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function deleteTest($id){
			$sql = "DELETE FROM test WHERE ID = $id";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function updateTest($test){
			$sql = "UPDATE test SET valeur1 = '".$test->getValeur1()."',
						valeur2 = '".$test->getValeur2()."'
						WHERE ID = ".$test->getId();
			
			if($this->db != null)
			{
				return $this->db->exec($sql);
				
			}else{
				return null;
			}
		}
		
		public function listeTest(){
			$sql = "SELECT * FROM test";
			
			if($this->db != null)
				return $this->db->query($sql)->fetchAll();
			else
				return null;
		}
	}