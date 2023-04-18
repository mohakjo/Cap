<?php

function getNbPages(PDO $dbco): int
{
    $sql ="SELECT count(*) AS nb_pokemon FROM pokemon
     WHERE num_forme=0";

    $stmt = $dbco ->query($sql);
    $result =$stmt ->fetch();
    return ceil($result['nb_pokemon'] / 12);
}

function getPokedex(int $numPage, PDO $dbco): array  // appelé la fonction a la base de donnée
{
    // Requête standard
  
    $end = $numPage * 12;
    $begin = $end - 12;
$sql = "SELECT num_pokemon as num, nom FROM pokemon WHERE num_forme=0 LIMIT " . $begin . " ," . $end;
$query = $dbco->query($sql);
$results = $query->fetchAll(); 



return $results; // ou tu remplaces $results = par return $query...
}

function getPokedexByNum(int $numPokemon, PDO $databaseConnetion):array 
{
    $sql = "SELECT num_pokemon as num, nom FROM pokemon 
    WHERE num_pokemon =5 AND num_forme=0"; 
    $stmt = $databaseConnetion->prepare($sql); 
    $stmt->bindParam('numPokemon', $numPokemon, PDO ::PARAM_INT); 
    $stmt->execute(); 
    return $stmt->fetchAll(); 
}





function getAllTypes(PDO $dbco): array
{
    $sql = "SELECT * FROM type_faiblesse";
    $query = $dbco->query($sql);

    $types = [];
    while ($line = $query->fetch()) {
        $types[$line['id_type']] = $line['nom'];
    }
    return $types;
}

/**
 * Le tableau de pokemons doit contenir pour chaque ligne un champs "num".
 */
function addTypesToPokemons(array $pokemons, PDO $dbco): array
{
    $allTypes = getAllTypes($dbco);

    $sql = "SELECT id_type FROM posseder_type WHERE num_pokemon=:numPokemon AND num_forme=0";
    $stmt = $dbco->prepare($sql);

    $pokedex = [];
    foreach ($pokemons as $pokemon) {
        $stmt->bindParam('numPokemon', $pokemon['num'], PDO::PARAM_INT);
        $stmt->execute();

        $types = [];
        while ($data = $stmt->fetch()) {
            $idType = $data['id_type'];
            $types[$idType] = $allTypes[$idType];
        }
        $pokemon['types'] = $types;
        $pokedex[] = $pokemon;
    }

    return $pokedex;
}




//Pour avoir les données une par une
//while ($data = $query->fetch()) {
//echo $data['num_pokemon'], "\n";
//echo $data['nom'], "\n";
//echo "<hr> \n";
//}

