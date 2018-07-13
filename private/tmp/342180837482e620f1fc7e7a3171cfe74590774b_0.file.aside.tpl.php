<?php
/* Smarty version 3.1.32, created on 2018-07-13 16:04:01
  from 'C:\Users\Timo Raterink\Desktop\Apache\new\private\views\aside.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b48b1512fcd86_07643286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '342180837482e620f1fc7e7a3171cfe74590774b' => 
    array (
      0 => 'C:\\Users\\Timo Raterink\\Desktop\\Apache\\new\\private\\views\\aside.tpl',
      1 => 1531490629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b48b1512fcd86_07643286 (Smarty_Internal_Template $_smarty_tpl) {
?>      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <div class="navbar" id="navbarid">
            <a href="index.php" class="navbaritem" id="currenttab">Homepage</a>
            <a href="index.php" class="navbaritem">Homepage 2</a>
              <a href="javascript:void(0);" id="navbaricon" onclick="navbarFunction()">
              <i class="fa fa-bars"></i></a>
        <?php echo '<script'; ?>
 type="text/javascript">
        function navbarFunction() {
            var x = document.getElementById("navbarid");
            if (x.className === "navbar") {
                x.className += " responsive";
            } else {
                x.className = "navbar";
            }
        }
        <?php echo '</script'; ?>
>
      </div>
	</div>
<?php }
}
