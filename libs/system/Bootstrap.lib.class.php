<?php
namespace libs\system;

class Bootstrap
{
	public function __construct()
	{
		$model = new Model();

		if (isset($_GET['url'])) {
			$url = explode('/', $_GET['url']);

			$file = 'src/controller/' . $url[0] . '.class.php';
			if (file_exists($file)) {
				require_once $file;
				$controller = new $url[0]();
				//si la methode est saisie
				if (isset($url[1])) {
					if ($url[1] == "") {
						$url[1] = "index";
					}
					if (method_exists($controller, $url[1])) {
						$m = $url[1];
						require_once "PHP_DB_Connection.lib.class.php";
						$r = paramsMethods($url[0], $url[1]);
						$params = $r->getParameters();
						if (count($params) == 0) {
								$controller->$m();
							} else {
							if (isset($url[2])) {
								$controller->{$url[1]}($url[2]);
							} else {
								$msg = "la methode<b> " . $url[1] . "()</b> a un parameter";
								$this->messageError($msg);
							}
						}
					} else {
						$msg = "La méthode <b>" . $url[1] . "()</b> n'existe pas dans le controller <b>" . $url[0] . "</b>!";
						$this->messageError($msg);
					}
				} else {
					if (method_exists($controller, "index")) {
						$controller->{"index"}();
					} else {
						$msg = "La méthode <b>index()</b> n'existe pas dans le controller <b>" . $url[0] . "</b>!";
						$this->messageError($msg);
					}
				}
			} else {
				$msg = "Le controller <b>" . $url[0] . "</b> n'existe pas !";
				$this->messageError($msg);
			}
		} else {
			//require_once 'controller/Accueil.class.php';
			$file = 'src/controller/' . welcome_params()['welcome_controller'] . '.class.php';
			if (file_exists($file)) {
					require_once $file;
					//echo welcome_params()['welcome_controller'];
					$controller = welcome_params()['welcome_controller'];
					$controller = new $controller();

					if (method_exists($controller, "index")) {
						$controller->{"index"}();
					} else {
						$msg = "La methode <b>index()</b> n'existe pas dans le controller <b>" . welcome_params()['welcome_controller'] . "</b>!";
						$this->messageError($msg);
					}
				} else {
				$msg = "Le controller welcome <b>" . welcome_params()['welcome_controller'] . "</b> n'existe pas !";
				$msg = $msg . "<br/>Merci de bien faire la configuration du fichier <b>config/welcome_controller.php</b>!";
				$this->messageError($msg);
			}
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
							' .
			$message
			. '</div>
						</body>
					</html>';

		die($msg);
	}
}
 