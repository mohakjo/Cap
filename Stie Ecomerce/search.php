<?php
require_once 'app/modem/databaseco.php';
require_once 'config.php';

$search = 7; //Rendre la recherche dynamique


$databaseConnection = getDatabaseConnection();
$pokedex = getPokedexByNum($search, $databaseConnection);
$pokedex = addTypesToPokemons($pokedex, $databaseConnection);

// Génération de la page à partir de la vue et du layout
$page_title = 'Pokedex';


ob_start();
require_once 'app/view/index.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php';