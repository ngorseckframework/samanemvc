<?php
/*==================================================
MODELE MVC DEVELOPPE PAR Ngor SECK
ngorsecka@gmail.com
(+221) 77 - 433 - 97 - 16
PERFECTIONNEZ CE MODELE ET FAITES MOI UN RETOUR
POUR TOUTE MODIFICATION VISANT A L'AMELIORER.
VOUS ETES LIBRE DE TOUTE UTILISATION.
===================================================*/ 
use libs\system\Controller; 
use src\model\TestRepository;

class TestController extends Controller{
    public function __construct(){
        parent::__construct();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Test/
     */

    public function index(){

        return $this->view->load("test/index");
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Test/getId/value
     */

    public function getId($id){
        $data['id'] = $id;

        return $this->view->load("test/get_id", $data);
    }
    
    public function get($id){
        
        $data['test'] = $tdb->getTest($id);
        
        return $this->view->load("test/get", $data);
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Test/liste
     */
    public function liste(){
        $tdb = new TestRepository();
        
        $data['tests'] = $tdb->listeTest();
        return $this->view->load("test/liste", $data);
    }
     /** 
     * url pattern for this method
     * localhost/projectName/Test/add
     */
    public function add(){
        $tdb = new TestRepository();
        if(isset($_POST['valider']))
        {
            extract($_POST);
            $data['ok'] = 0;
            if(!empty($valeur1) && !empty($valeur2)) {
                
                $testObject = new Test();
                
                $testObject->setValeur1(addslashes($valeur1));
                $testObject->setValeur2(addslashes($valeur2));

                $ok = $tdb->addTest($testObject);
                $data['ok'] = $ok;
            }
            return $this->view->load("test/add", $data);
        }else{
            return $this->view->load("test/add");
        }
    }
     /** 
     * url pattern for this method
     * localhost/projectName/Test/update
     */
    public function update(){
        $tdb = new TestRepository();
        if(isset($_POST['modifier'])){
            extract($_POST);
            if(!empty($id) && !empty($valeur1) && !empty($valeur2)) {
                $testObject = new Test();
                $testObject->setId($id);
                $testObject->setValeur1($valeur1);
                $testObject->setValeur2($valeur2);
                $ok = $tdb->updateTest($testObject);
            }
        }
        
        return $this->liste();
    }
     /** 
     * url pattern for this method
     * localhost/projectName/Test/delete/value
     */
    public function delete($id){
        
        $tdb = new TestRepository();
        $tdb->deleteTest($id);
        return $this->liste();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Test/edit/value
     */
    public function edit($id){
        
        $tdb = new TestRepository();
        
        $data['test'] = $tdb->getTest($id);
        var_dump($tdb->getTest($id));
        return $this->view->load("test/edit", $data);
    }
}
?>