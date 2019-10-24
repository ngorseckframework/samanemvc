<?php
/*==================================================
MODELE MVC DEVELOPPE PAR Ngor SECK
ngorsecka@gmail.com
(+221) 77 - 433 - 97 - 16
PERFECTIONNEZ CE MODELE ET FAITES MOI UN RETOUR
POUR TOUTE MODIFICATION VISANT A AMELIORER
CE DERNIER (GIT).
VOUS ETES LIBRE DE TOUTE UTILISATION.
===================================================*/
/**
 * ORM
 */
$choix = "ORM"; 
/** 
 * Turn to on or off your database
 */
$etat = 'off'; //on or off

$orm = array(
              'dbname' => 'samanemvcorm_test',//change your database name
              'user'     => 'root',
              'password' => '',
              'host' => '127.0.0.1',
              'driver' => 'pdo_mysql',
);
?>