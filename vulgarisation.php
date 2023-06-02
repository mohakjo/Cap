<?php



$page_title = 'Vulgarisation';
$css = 'vulgarisation.css';


ob_start();
require_once 'app/view/parts/vulgarisation.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php';



?>