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
    class TestDB extends Model{
		
		//La base de données samane_test est dans view/test
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
		
		public function addTest($valeur1, $valeur2){
			$sql = "INSERT INTO test VALUES(null, '$valeur1', '$valeur2')";
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
		
		public function updateTest($idTest, $valeur1, $valeur2){
			$sql = "UPDATE test SET valeur1 = '$valeur1',
						valeur2 = '$valeur2'
						WHERE ID = $idTest";

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