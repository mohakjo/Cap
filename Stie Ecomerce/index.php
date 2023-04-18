<?php

require_once 'app/modem/databaseco.php';
require_once 'app/modem/pokedex.model.php';
require_once 'utils.php';
$dbco = getdbco();
$pokedex = getPokedex($dbco);
$pokedex = addTypesToPokemons($pokedex, $dbco);
print_r($pokedex);





  // Requete préparée

//$numPokemon = 3; // vient de l'utilisateur
//$sql = "SELECT num_pokemon, nom FROM pokemon WHERE num_pokemon=:numPokemon";
//$stmt = $dbco->prepare($sql);
// de temps en temps $stmt->bindValue('numPokemon', 3);
//$stmt->bindParam('numPokemon', $numPokemon, PDO::PARAM_INT); //le pdo c sque l'on attend (boolean, int...)
//$stmt->execute();
//$results = $stmt->fetchAll(); // Ou avec le while que l'on peut aussi utiliséé pour les avoir une par une

//echo"toto";
?>


