<?php

require_once 'app/model/databaseco.php';
require_once 'app/model/biere.model.php';

$page_title = 'Nos bières';
$css = 'nos_bieres.css';

$dbco=getdbco();
$nos_bieres= getBieres($dbco);

ob_start();
require_once 'app/view/parts/nos_bieres.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php';



?>