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
	require_once 'config/welcome_controller.php';
  require_once 'config/database.php';
  require_once 'libs/smarty/libs/Smarty.class.php';
  require_once 'libs/rooting/rooting.conf.php';
  /*
  require_once 'libs/system/Model.lib.class.php';
  require_once 'libs/system/View.lib.class.php';
  require_once 'libs/system/Controller.lib.class.php';
  require_once 'libs/system/Bootstrap.lib.class.php'; 
  */
class Autoloader
{
  static function register()
  {
    spl_autoload_register(array(__CLASS__, "autoload"));
  }
  static function autoload($class)
  {
    //autoloader of system
    if(file_exists("libs/system/".$class.".lib.class.php"))
      require_once "libs/system/".$class.".lib.class.php";
    
    //autoload of developers classes
    else if(file_exists("src/entities/".$class.".class.php"))
      require_once "src/entities/".$class.".class.php";
    else if(file_exists("src/controller/".$class.".class.php"))
      require_once "src/controller/".$class.".class.php";
    else if(file_exists("src/model/".$class.".class.php"))
      require_once "src/model/".$class.".class.php";

    else if(file_exists("src/entities/".$class.".php"))
      require_once "src/entities/".$class.".php";
    else if(file_exists("src/controller/".$class.".php"))
      require_once "src/controller/".$class.".php";
    else if(file_exists("src/model/".$class.".php"))
      require_once "src/model/".$class.".php";
    //for namespaces
    else if(file_exists(str_replace("\\", "/", $class.".class.php")))
      require_once str_replace("\\", "/", $class.".class.php");
    else if(file_exists(str_replace("\\", "/", $class.".php")))
      require_once str_replace("\\", "/", $class.".php");
    else if(file_exists(str_replace("\\", "/", $class.".lib.class.php")))
      require_once str_replace("\\", "/", $class.".lib.class.php");
    else
    {
      $message = "le namespace <b>".$class."</b> ne correspond pas à un chemin valide
                  dans votre application.
                  <br/> Ou encore vous vous êtes trompés sur l'hortographe!!!!";
      require_once "libs/system/SM_Error.lib.class.php";
      $error = new SM_Error();
      $error->messageError($message);
    }
  }
}
Autoloader::register();
?>