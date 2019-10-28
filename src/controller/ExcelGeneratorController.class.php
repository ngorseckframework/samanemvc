<?php
use libs\system\Controller;
use src\service\excel\SamaneExcel;

class ExcelGeneratorController extends Controller{
    public function __construct(){
        parent::__construct();
    }
    public function generate()
    {
        $excel = new SamaneExcel();
        /**
         * headers of my excel file
         */
        $headers = array();
        $headers['A1'] = 'Nom';
        $headers['B1'] = 'Prenom';
        $headers['C1'] = 'Email';
        /**
         * data of my excel file
         */
        $data = array();
        $data['A2'] = 'SECK';
        $data['B2'] = 'Ngor';
        $data['C2'] = 'samanemvc@gmail.sn';
        /**
         * name of my excel file
         */
        $fileName  = 'public/folder/excel/samane.xlsx';
        
        $result = $excel->generate($headers, $data, $fileName);

        $data['excelResult'] = $result;

        return $this->view->load("excel/index", $data);
    }
    public function read()
    {
        $inputFileName = 'public/folder/excel/samane.xlsx';
        if(file_exists($inputFileName))
        {
            $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);
            $sheetData = $spreadsheet->getActiveSheet()->toArray(null,true,true,true);
        
            //var_dump($sheetData);
            /**
             * Example : For reading personne.xlsx
             */
            foreach ($sheetData as $key => $data) {
                $nom = addslashes($data["A"]);//A represente la premiere colonne du fichier Excel
                $prenom = addslashes($data["B"]);//B represente la deuxieme colonne du fichier Excel
                $email = addslashes($data["C"]);//C represente la troiseme colonne du fichier Excel
                echo $nom .'  '.$prenom.'  '.$email.'<br/>';
            }
        } else {
            //...
        }
        
    }
}