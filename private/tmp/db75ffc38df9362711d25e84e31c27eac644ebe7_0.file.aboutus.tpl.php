<?php
/* Smarty version 3.1.32, created on 2018-07-13 16:56:03
  from 'C:\Users\Timo Raterink\Desktop\Apache\new\private\views\aboutus.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b48bd8317f991_72269363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db75ffc38df9362711d25e84e31c27eac644ebe7' => 
    array (
      0 => 'C:\\Users\\Timo Raterink\\Desktop\\Apache\\new\\private\\views\\aboutus.tpl',
      1 => 1531493758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b48bd8317f991_72269363 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">


  <div id="aboutuscontent">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['aboutuscontent']->value, 'content');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['content']->value) {
?>
  	<li style="list-style-type: none; margin-top: 3vh;"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</li>
  		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
<?php }
}
