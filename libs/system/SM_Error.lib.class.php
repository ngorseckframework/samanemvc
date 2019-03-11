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

class SM_Error{

    public function __construct(){
        
    }
    public function messageError($message)
    {
        $msg = '<html>
                    <head>
                        <meta charset="UTF-8"/>
                        <title>Error</title>
                        <link type="text/css" rel="stylesheet" href="../public/css/bootstrap.min.css"/>
                        <link type="text/css" rel="stylesheet" href="public/css/bootstrap.min.css"/>
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
}
?>