<?php
use libs\system\Controller;
use src\service\pdf\SamanePdf;

class PdfGeneratorController extends Controller{
    public function __construct(){
        parent::__construct();
    }
    public function generate()
    {
        $pdf = new SamanePdf();

        $htmlDataFormat = '<center>
                    <h1>Samane Framework</h1>
                </center>';
        $htmlDataFormat = $htmlDataFormat . '<br><p>Samane is a PHP framework</p>';
        $htmlDataFormat = $htmlDataFormat . '<br><p>Ngor Seck, Senior PHP developer</p>';
        $htmlDataFormat = $htmlDataFormat . '<br><p>Email: samanemvc@gmail.com</p>';
        // (Optional) Setup the paper size and orientation
        $paperFormat = array();
        $paperFormat['A4'] = 'portrait';//$paperFormat['A4'] = 'landscape';
        
        $fileName  = 'public/folder/pdf/samane.pdf';
        /**
         * V1.9.2
         */
        if(file_exists($fileName))
        {
            unlink($fileName);
            $fileName  = 'public/folder/pdf/samane.pdf';
        }
        $result = $pdf->generate($htmlDataFormat, $paperFormat, $fileName);
        
        $data['pdfResult'] = $result;

        return $this->view->load("pdf/index", $data);
    }
}