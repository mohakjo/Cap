<?php 

require_once 'app/modem/databaseco.php';
require_once 'app/modem/pokedex.model.php';
require_once 'utils.php';
 
$dbco = getdbco();
$nbPages = getNBPages($dbco);


if(empty($_GET['page']) || !is_numeric($_GET['page']) || $_GET ['page'] < 1) {
    $currentPage = 1;
}else if ($_GET['page'] > $nbPages){
    $currentPage = $nbPages;
}else{
    $currentPage = $_GET['page'];
};




$pokedex = getPokedex($currentPage, $dbco);
$pokedex = addTypesToPokemons($pokedex, $dbco);

// Génération de la page à partir de la vue et du layout
$page_title = 'Pokedex';


ob_start();
require_once 'app/view/pokedex.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php';