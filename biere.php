<?php 

require_once 'app/model/databaseco.php';
require_once 'app/model/biere.model.php';
$css="biere.css";
$nombiere = $_GET['nom'] ;
if (empty($_GET['nom'])) {
    die('Page introuvable');
}

$dbco = getdbco();
$solobiere= getbiere($nombiere, $dbco);
$page_title = $nombiere;
ob_start();
require_once 'app/view/parts/biere.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php';