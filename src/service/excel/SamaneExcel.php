<?php
namespace src\service\excel;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class SamaneExcel
{
    /**
     * $headers is a array
     * $data is a array
     * $file is the name of your excel file
     */
    public function generate($headers, $data, $fileName)
    {
        $spreadsheet = new Spreadsheet();
        $spreadsheet->setActiveSheetIndex(0);
        $sheet = $spreadsheet->getActiveSheet();
        
        foreach ($headers as $key => $value) {
            $sheet->setCellValue($key, $value);//Excample  $sheet->setCellValue('A1', 'Last name');
        
        }
        
        foreach ($data as $key => $value) {
            $sheet->setCellValue($key, $value);//Excample  $sheet->setCellValue('A2', 'SECK');
        
        }
        
        $writer = new Xlsx($spreadsheet);
        $writer->save($fileName);

        return "Excel file generated in in public/folder/excel";
    }
}
?>