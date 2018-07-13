<?php
/* Smarty version 3.1.32, created on 2018-07-12 18:11:18
  from '/var/www/vhosts/24316.hosts.ma-cloud.nl/httpdocs/bewijzenmap/periode1.4/proj/private/views/homepage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b477da66730d9_96441038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '713cbf06d9a513417360567118f724873d188e81' => 
    array (
      0 => '/var/www/vhosts/24316.hosts.ma-cloud.nl/httpdocs/bewijzenmap/periode1.4/proj/private/views/homepage.tpl',
      1 => 1531411871,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b477da66730d9_96441038 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">


  <div id="homepagecontent">
  
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['homepageposts']->value, 'homepagepost');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['homepagepost']->value) {
?>
	<li><?php echo $_smarty_tpl->tpl_vars['homepagepost']->value;?>
</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	
  </div>
<?php }
}
