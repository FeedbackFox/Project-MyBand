<?php
require ('../private/smarty/Smarty.class.php');
require ('../private/model.php');
require ('../private/controller.php');


$smarty = new Smarty();
$smarty->setCompileDir('../private/tmp');
$smarty->setTemplateDir('../private/views');

define('ARTICLES_PER_PAGE', 5);
// TERNARY OPERATOR
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$pageno = isset($_GET['no']) ? $_GET['no'] : 1;

switch ($page) {
  case 'home': homepage_action($smarty); break;
  case 'contact': contact_action($smarty); break;
  case 'aboutus': aboutus_action(); break;
  default: page_not_found_action($smarty); break;

}

?>
