<?php



$page_title = 'Commandes';
$css = 'commandes.css';


ob_start();
require_once 'app/view/parts/commandes.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php';



?>