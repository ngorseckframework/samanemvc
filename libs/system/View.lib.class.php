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

class View{
		private $tpl;
        public function __construct(){
			$this->tpl = new Smarty();
        }
        public function load(){
            $num = func_num_args();
            $args = func_get_args();
            switch($num){
                case 1:
                    $this->chargerDonnees($args[0]);
                    break;
                case 2:
                    $this->chargerDonnees($args[0], $args[1]);
                    break;
            }
        }
		
        private function chargerDonnees($page, $data = array()){
            $page_directory = 'view/' . $page . '.html';
            $data['url_base'] = base_url();
            $this->tpl->assign($data);
                
            if(file_exists($page_directory))
            {
    			$this->tpl->display($page_directory);
            }else{

                $message = "la view <b>".$page_directory."</b> n'existe pas!!!!";
                $this->messageError($message);
            }
        }
        private function messageError($message)
        {
            $msg = '<html>
                        <head>
                            <meta charset="UTF-8">
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