<?php // CONTROLLER HAALT DATA BINNEN EN SET VIEW

function homepage_action($smarty) {
  $smarty->assign('style','homepage.css');
  $smarty->assign('script','homepage.js');
  $smarty->display('html.tpl');
  $smarty->display('header.tpl');
  $smarty->display('homepage.tpl');
  $smarty->display('aside.tpl');
  $smarty->display('footer.tpl');

}

function page_not_found_action($smarty) {
  $smarty->display('notfound.tpl');
}

 ?>
