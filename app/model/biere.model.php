<?php 

function getBieres(PDO $dbco): array
{
    $sql = "SELECT * FROM biere";
    $query = $dbco->query($sql);
    $results = $query->fetchAll();

    return $results;
}


function getbiere(string $nombiere, $dbco): array{
    $dbco=getdbco();
    $sql="SELECT * FROM biere WHERE Nom=:nom";
    $stmt=$dbco->prepare($sql);
    $stmt->bindParam('nom', $nombiere);
    $stmt->execute();
    $result= $stmt->fetch();
    return $result;
}