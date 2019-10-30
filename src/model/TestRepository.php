<?php
/*==================================================
MODELE MVC DEVELOPPE PAR Ngor SECK
ngorsecka@gmail.com
(+221) 77 - 433 - 97 - 16
PERFECTIONNEZ CE MODELE ET FAITES MOI UN RETOUR
POUR TOUTE MODIFICATION VISANT A L'AMELIORER.
VOUS ETES LIBRE DE TOUTE UTILISATION.
===================================================*/
namespace src\model; 

use libs\system\Model; 
	
class TestRepository extends Model{
	
	/**
	 * Methods with DQL (Doctrine Query Language) 
	 */
	public function __construct(){
		parent::__construct();
	}

	public function getTest($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Test')->find(array('id' => $id));
		}
	}
	
	public function addTest($test)
	{
		if($this->db != null)
		{
			$this->db->persist($test);
			$this->db->flush();

			return $test->getId();
		}
	}
	
	public function deleteTest($id){
		if($this->db != null)
		{
			$test = $this->db->find('Test', $id);
			if($test != null)
			{
				$this->db->remove($test);
				$this->db->flush();
			}else {
				die("Objet ".$id." does not existe!");
			}
		}
	}
	
	public function updateTest($test){
		if($this->db != null)
		{
			$getTest = $this->db->find('Test', $test->getId());
			if($getTest != null)
			{
				$getTest->setValeur1($test->getValeur1());
				$getTest->setValeur2($test->getValeur2());
				$this->db->flush();

			}else {
				die("Objet ".$test->getId()." does not existe!!");
			}	
		}
	}
	
	public function listeTest(){
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT t FROM Test t")->getResult();
		}
	}
	
	public function listeTestsById($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Test')->findBy(array('id' => $id));
		}
	}
	
	public function listeOfTestsById($id)
	{
		if($this->db != null)
		{
			return $this->db->createQuery("SELECT t FROM Test t WHERE t.id = " . $id)->getSingleResult();
		}
	}

	public function listeOfTests()
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Test')->findAll();
		}
	}
	
}