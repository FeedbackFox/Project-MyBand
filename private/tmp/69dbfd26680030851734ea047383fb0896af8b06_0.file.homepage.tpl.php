<?php
/* Smarty version 3.1.32, created on 2018-07-13 16:58:16
  from 'C:\Users\Timo Raterink\Desktop\Apache\new\private\views\homepage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b48be089e7ad5_57057645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69dbfd26680030851734ea047383fb0896af8b06' => 
    array (
      0 => 'C:\\Users\\Timo Raterink\\Desktop\\Apache\\new\\private\\views\\homepage.tpl',
      1 => 1531493884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b48be089e7ad5_57057645 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">


  <div id="homepagecontent">
	<div class="list">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['homepageposts']->value, 'homepagepost');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['homepagepost']->value) {
?>
	<li style="list-style-type: none; margin-top: 3vh;"><?php echo $_smarty_tpl->tpl_vars['homepagepost']->value;?>
</li><div class="splitcontent"></div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php if ($_smarty_tpl->tpl_vars['pageno']->value > 1) {?>
		<a id="backbutton" href="index.php?page=home&no=<?php echo $_smarty_tpl->tpl_vars['pageno']->value-1;?>
">Previous page</a>
		<?php } else { ?>
		<a id="backbutton" style="color: gray">Previous page</a>
		<?php }?>
		<h4 id="pagecounter">Current page: <?php echo $_smarty_tpl->tpl_vars['pageno']->value;?>
</h4>
		<?php if ($_smarty_tpl->tpl_vars['pageno']->value < $_smarty_tpl->tpl_vars['number_of_pages']->value) {?>
		<a id="nextbutton"href="index.php?page=home&no=<?php echo $_smarty_tpl->tpl_vars['pageno']->value+1;?>
">Next page</a>
		<?php } else { ?>
		<a id="nextbutton" style="color: gray">Next page</a>
		<?php }?>
	</div>
  </div>
<?php }
}
