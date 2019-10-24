<?php
namespace src\service\pdf;
use Dompdf\Dompdf;

class SamanePdf
{
    public function generate($htmlDataFormat, $paperFormat = null, $fileName)
    {
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml($htmlDataFormat);
        /**
         * (Optional) Setup the paper size and orientation
         * $dompdf->setPaper('A4', 'landscape');
         * $dompdf->setPaper('A4', 'portrait');
         */
        foreach ($paperFormat as $key => $value) {
            $dompdf->setPaper($key, $value);
        }
        
        // Render the HTML as PDF
        $dompdf->render();

        /**
         * Output the generated PDF to Browser
        */
        //$dompdf->stream();

        /**
         * save the pdf file on the server
        */
        $pdf_string =   $dompdf->output();
        
        file_put_contents($fileName, $pdf_string ); 

        return 'PDF file generated in public/folder/pdf';
    }
}
?>