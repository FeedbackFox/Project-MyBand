<?php
/* Smarty version 3.1.32, created on 2018-07-13 18:21:20
  from 'C:\Users\Timo Raterink\Desktop\Apache\new\private\views\tours.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b48d180991e94_90434373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11ec6c2694701287615d5c20e4dbff72284678a1' => 
    array (
      0 => 'C:\\Users\\Timo Raterink\\Desktop\\Apache\\new\\private\\views\\tours.tpl',
      1 => 1531498574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b48d180991e94_90434373 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">


  <div id="tourscontent">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tourscontent']->value, 'content');
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
