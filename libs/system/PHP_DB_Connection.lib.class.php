<?php
function getConnexion(){
    $dsn = "mysql:host=".connexion_params()['host'].";dbname=".connexion_params()['database_name'];
    $user = connexion_params()['user'];
    $password = connexion_params()['password'];
    try{
        $db = new PDO($dsn,
                                $user,
                                $password,
                                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }catch (PDOException $ex){
        $erreur_base = $ex->getMessage();
        if(substr($erreur_base, 0, 39) == "SQLSTATE[HY000] [1049] Unknown database")
        {   
            $error = new SM_Error();
            $message = "Hooo vous n'avez pas encore créé la base de données? :)";
            $error->messageError($message);
            
        }
        else if(substr($erreur_base, 0, 22) == "SQLSTATE[HY000] [1045]")
        {   
            $error = new SM_Error();
            $message = "Hooo vous n'avez pas precisé les bons parametres USER et PASSWORD :)";
            $error->messageError($message); 
            
        } else {
            $error = new SM_Error();
            $message = $ex->getMessage();
            $error->messageError($message);
            
        }
    }
    return $db;
}
function paramsMethods($controller,$methode)
{
    return new ReflectionMethod($controller,$methode);
}
?>