<?php
use libs\system\Controller;

use Src\entities\Test as TestEntity;

use Src\model\TestDB;

class Test extends Controller
{
    public function __construct()
    {
        parent::__construct();
        //Appel du model grace au systeme autoloading
    }

    //A noter que toutes les views de ce controller doivent être créées dans le dossier view/test
    //Ne tester pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
    public function index()
    {

        return $this->view->load("test/index");
    }

    public function getID($id)
    {
        $data['ID'] = $id;

        return $this->view->load("test/get_id", $data);
    }

    public function get($id)
    {
        //Instanciation du model
        $tdb = new TestDB();

        $data['test'] = $tdb->getTest($id);

        return $this->view->load("test/get", $data);
    }
    public function liste()
    {
        //Instanciation du model
        $tdb = new TestDB();

        $data['tests'] = $tdb->listeTest();

        return $this->view->load("test/liste", $data);
    }


    public function add()
    {
        //Instanciation du model
        $tdb = new TestDB();
        //Récupération des données qui viennent du formulaire view/test/add.html (à créer)
        if (isset($_POST['valider'])) //'valider' est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data['ok'] = 0;
                if (!empty($valeur1) && !empty($valeur2)) {

                    $testObject = new TestEntity();
                    $testObject->setValeur1($valeur1);
                    $testObject->setValeur2($valeur2);

                    $ok = $tdb->addTest($testObject);
                    $data['ok'] = $ok;
                }
                return $this->view->load("test/add", $data);
            } else {
            return $this->view->load("test/add");
        }
    }
    public function update()
    {
        //Instanciation du model
        $tdb = new TestDB();
        if (isset($_POST['modifier'])) {
            extract($_POST);
            if (!empty($id) && !empty($valeur1) && !empty($valeur2)) {
                $testObject = new TestEntity();
                $testObject->setId($id);
                $testObject->setValeur1($valeur1);
                $testObject->setValeur2($valeur2);
                $ok = $tdb->updateTest($testObject);
            }
        }

        return $this->liste(); //appel de la methode liste du controller
    }
    public function delete($id)
    {
        //Instanciation du model
        $tdb = new TestDB();
        //Supression
        $tdb->deleteTest($id);
        //Retour vers la liste
        return $this->liste();
    }

    public function edit($id)
    {

        //Instanciation du model
        $tdb = new TestDB();
        //Supression
        $data['test'] = $tdb->getTest($id);
        //chargement de la vue edit.html
        return $this->view->load("test/edit", $data);
    }
}
 