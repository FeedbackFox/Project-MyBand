<?php // CONTROLLER HAALT DATA BINNEN EN SET VIEW

function homepage_action($smarty) {
  global $pageno;

  $homepageposts = get_homepage_posts();
  $number_of_pages = calculate_pages();

  $smarty->assign('pageno', $pageno);
  $smarty->assign('homepageposts', $homepageposts);
  $smarty->assign('number_of_pages', $number_of_pages);

  $smarty->assign('style','homepage.css');
  $smarty->assign('script','homepage.js');

  $smarty->display('html.tpl');
  $smarty->display('header.tpl');
  $smarty->display('aside.tpl');
  $smarty->display('homepage.tpl');

  $smarty->display('footer.tpl');

}

function aboutus_action() {
  global $smarty;

  $aboutuscontent = get_aboutus_content();

  $smarty->assign('aboutuscontent', $aboutuscontent);

  $smarty->assign('style','aboutus.css');
  $smarty->assign('script', 'aboutus.js');

  $smarty->display('html.tpl');
  $smarty->display('header.tpl');
  $smarty->display('aside.tpl');
  $smarty->display('aboutus.tpl');
  $smarty->display('footer.tpl');
}

function page_not_found_action($smarty) {
  $smarty->display('notfound.tpl');
}

 ?>
