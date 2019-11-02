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
use src\controller as Basecontroller;
class Bootstrap{
        public function __construct(){
            $error = new SM_Error();
			$model = new Model();
			/**
			 * V1.9.2
			 */
			$boolUrl = false;
			if(isset($_GET['url'])){
				$boolUrl = true;
			}
			if(strlen($_SERVER["REQUEST_URI"]) != 1){
				$url = explode('/', substr($_SERVER['REQUEST_URI'],1));
				$file = 'src/controller/' . $url[0] . 'Controller.class.php';
                $controllerObject = $url[0]."Controller";
				if(file_exists($file)){
					$boolUrl = true;
				}
			}
			if($boolUrl == true){
				if(isset($_GET['url'])) {
                    $url = explode('/', $_GET['url']);
                } else {
                    $url = explode('/', substr($_SERVER['REQUEST_URI'],1));
				}
				
				$error->pageError($url[0]);

                $file = 'src/controller/' . $url[0] . 'Controller.class.php';
                $controllerObject = $url[0]."Controller";
				if(file_exists($file)){
					require_once $file;
					
					$controller = new $controllerObject();
                    //si la methode est saisie
                    if(isset($url[1])){
                        if($url[1] == ""){
                            $url[1] = "index";
                        }
                        if(method_exists($controller, $url[1])){
							$m =$url[1];
							require_once "PHP_DB_Connection.lib.class.php";
                            $r = paramsMethods($controllerObject,$url[1]);
                            $params = $r->getParameters();
                            if(count($params)== 0)
                            {
                                $controller->$m();

                            }else{
                            	if(isset($url[2])){
	                                $controller->{$url[1]}($url[2]);
	                            }
	                            else{
	                                $msg = "la methode<b> ".$url[1]."()</b> a un parameter";
	                                $error->messageError($msg);
	                            }
	                        }
                        }else{
                            $msg = "La méthode <b>".$url[1]."()</b> n'existe pas dans le controller <b>".$url[0]."</b>!";
							$error->messageError($msg);
                        }
                    }else{
						if(method_exists($controller, "index")){
							$controller->{"index"}();
						}else{
							$msg = "La méthode <b>index()</b> n'existe pas dans le controller <b>".$url[0]."</b>!";
							$error->messageError($msg);
						}
					}
                }else{
                    $msg = "Le controller <b>" . $controllerObject . "</b> n'existe pas !";
					$error->messageError($msg);
                }

            }else{
                $file = 'src/controller/'.welcome_params()['welcome_controller'].'.class.php';
				if(file_exists($file))
				{
					require_once $file;
					$controller = welcome_params()['welcome_controller'];
					$controller = new $controller();
				
					if(method_exists($controller, "index")){
						$controller->{"index"}();
					}else{
						$msg = "La methode <b>index()</b> n'existe pas dans le controller <b>".welcome_params()['welcome_controller']."</b>!";
						$error->messageError($msg);
					}
                    
				}else{
					$msg = "Le controller welcome <b>" . welcome_params()['welcome_controller'] . "</b> n'existe pas !";
					$msg = $msg. "<br/>Merci de bien faire la configuration du fichier <b>config/welcome_controller.php</b>!";
					$error->messageError($msg);
				}
            }
        }
		
    }
?>