<?php 

function getdbco(): PDO 
{
$serveur = "localhost";
$dbname = "sqlite:C:\wamp\www\pokemon\app\database\pokemon.sqlite";
$user = "root";
$pass = "";
    

    try{
        
        //On se connecte à la BDD
        $dbco = new PDO($dbname);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbco->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
return $dbco;
}



?>