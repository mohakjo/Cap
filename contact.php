<?php



$page_title = 'Contact';
$css = 'contact.css';


ob_start();
require_once 'app/view/parts/contact.view.php';
$content = ob_get_clean();
require_once 'app/view/common/layout.php';



?>