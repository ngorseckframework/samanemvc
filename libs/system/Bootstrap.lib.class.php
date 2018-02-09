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

class Bootstrap{
        public function __construct(){
            $model = new Model();
			
			if(isset($_GET['url'])){
                $url = explode('/',$_GET['url']);

                $file = 'controller/' . $url[0] . '.class.php';
                if(file_exists($file)){
                    require_once $file;
                    $controller = new $url[0]();
                    //si la methode est saisie
                    if(isset($url[1])){
                        if($url[1] == ""){
                            $url[1] = "index";
                        }
                        if(method_exists($controller, $url[1])){
                            if(isset($url[2])){
                                $controller->{$url[1]}($url[2]);
                            }else{
                                $controller->{$url[1]}();
                            }
                        }else{
                            echo "la methode ".$url[1]." n'existe pas dans le controller ".$url[0];
                        }
                    }else{
						if(method_exists($controller, "index")){
							$controller->{"index"}();
						}else{
							echo "la methode index n'existe pas dans le controller ".$url[0];
						}
					}
                }else{
                    echo "Le controller " . $url[0] . " n'existe pas !";
                }

            }else{
                //require_once 'controller/Accueil.class.php';
				$file = 'controller/'.welcome_params()['welcome_controller'].'.class.php';
				if(file_exists($file))
				{
					require_once $file;
					//echo welcome_params()['welcome_controller'];
					$controller = welcome_params()['welcome_controller'];
					$controller = new $controller();
				
					if(method_exists($controller, "index")){
						$controller->{"index"}();
					}else{
						echo "la methode index n'existe pas dans le controller ".welcome_params()['welcome_controller'];
					}
                    
				}else{
					echo "Le controller welcome " . welcome_params()['welcome_controller'] . " n'existe pas !";
					echo "<br/>Merci de bien faire la cofiguration du fichier config/autoloaders.php";
				}
            }
        }
    }
?>