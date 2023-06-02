<?php



$page_title = 'Qui sommes-nous ?';
$css = 'qui_sommes_nous.css';


ob_start();
require_once 'app/view/parts/qui_sommes_nous.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php';



?>