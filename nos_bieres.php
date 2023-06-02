<?php



$page_title = 'Nos bières';
$css = 'nos_bieres.css';


ob_start();
require_once 'app/view/parts/nos_bieres.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php';



?>