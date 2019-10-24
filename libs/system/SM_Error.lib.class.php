<?php
/*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODELE ET FAITES MOI UN RETOUR
    POUR TOUTE MODIFICATION VISANT A L'AMELIORER.
    VOUS ETES LIBRE DE TOUTE UTILISATION.
  ===================================================*/
namespace libs\system;
class SM_Error{

    public function __construct(){
        
    }
    public function messageError($message)
    {
        $msg = '<html>
                    <head>
                        <meta charset="UTF-8"/>
                        <title>Error</title>
                        <link type="text/css" rel="stylesheet" href="'.base_url().'public/css/bootstrap.min.css"/>
                    </head>
                    <body>
                        <div class="alert alert-danger" style="font-size:18px; text-align:justify;">
                        '.
                            $message
                        .'</div>
                    </body>
                </html>';
                
        die($msg);
    }
    public function pageError($url)
    {
            switch ($url){
                case "config":
                    $this->exit404();
                    break;
                case "libs":
                    $this->exit404();
                    break;
                case "libs/autoload":
                    $this->exit404();
                    break;
                case "libs/smarty":
                    $this->exit404();
                    break;
                case "libs/system":
                    $this->exit404();
                    break;
                case "public":
                    $this->exit404();
                    break;
                case "public/css":
                    $this->exit404();
                    break;
                case "public/image":
                    $this->exit404();
                    break;
                case "public/js":
                    $this->exit404();
                    break;
                case "src":
                    $this->exit404();
                    break;
                case "src/controller":
                    $this->exit404();
                    break;
                case "src/model":
                    $this->exit404();
                    break;
                case "src/view":
                    $this->exit404();
                    break;
                case "src/entities":
                    $this->exit404();
                    break;
                case "templates_c":
                    $this->exit404();
                    break;
                case "vendor":
                    $this->exit404();
                    break;
            }
    }
    private function exit404()
    {
        global $_SERVER;
        header("HTTP/1.1 404 Not Found");
        
        include("404error.php");
        exit();
    }
}
?>