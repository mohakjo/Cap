<?php



$page_title = 'Accueil';
$css = 'index.css';


ob_start();
require_once 'app/view/index.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php';



?>


