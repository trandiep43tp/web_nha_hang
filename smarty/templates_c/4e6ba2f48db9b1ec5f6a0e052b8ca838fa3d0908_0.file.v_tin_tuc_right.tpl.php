<?php
/* Smarty version 3.1.30, created on 2017-02-05 15:50:00
  from "C:\wamp\www\QL_nha_hang2\views\tin_tuc\v_tin_tuc_right.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589749a820b499_30251809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e6ba2f48db9b1ec5f6a0e052b8ca838fa3d0908' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang2\\views\\tin_tuc\\v_tin_tuc_right.tpl',
      1 => 1486309795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589749a820b499_30251809 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3 class="p1" style="margin-left:25px">Tin Tức Mới</h3>
<div>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tin_tucs']->value, 'tin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tin']->value) {
?>
	<!--item-->
  <div class="p2" style="float:right; margin:15px;width:180px">
    <a href="tin_tuc.php?ma_tin_tuc=<?php echo $_smarty_tpl->tpl_vars['tin']->value->ma_tin_tuc;?>
"><img src="public/images/tin_tuc/<?php echo $_smarty_tpl->tpl_vars['tin']->value->hinh;?>
" alt="" width="180px" height="120px"></a>
    <h5 style="text-align:center"><?php echo $_smarty_tpl->tpl_vars['tin']->value->tieu_de;?>
</h5>     
   </div>
   <!--item-->
   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>

<?php }
}
