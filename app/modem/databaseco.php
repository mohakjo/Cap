<?php 

function getdbco(): PDO 
{
$dsn="mysql:host=localhost;dbname=cap;charset=utf8";
$user="root";
$pass="";

    try{

        //On se connecte à la BDD
        $dbco=new PDO($dsn,$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbco->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
return $dbco;
}

?>