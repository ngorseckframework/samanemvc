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

	function base_url()
    {
        //PROTOCOLE
        $protocole = $_SERVER["SERVER_PROTOCOL"];
        $protocole = strtolower(explode("/", $protocole)[0]);
        $protocole = $protocole . "://";
        //echo $protocole."<br/>";
        //SERVER
        $server_name = $_SERVER["SERVER_NAME"];
        $server_name = $server_name . ":";
        //echo $server_name."<br/>";
        //PORT
        $server_port = $_SERVER["SERVER_PORT"];
        //echo $server_port."<br/>";
        //PATH
        $base_path = $_SERVER["PHP_SELF"];
        $tab = explode("/", $base_path);
        $base_path = "";
        for ($i = 1; $i < count($tab) - 1; $i++) {
            $base_path = $base_path . "/" . $tab[$i];
        }
        $base_path = $base_path . "/";
        //echo $base_path;

        $url = $protocole . $server_name . $server_port . $base_path;
        //echo $url;
        return $url;
    }
?>