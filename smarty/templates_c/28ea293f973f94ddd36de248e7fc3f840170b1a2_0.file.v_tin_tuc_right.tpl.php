<?php
/* Smarty version 3.1.30, created on 2017-01-30 06:37:26
  from "C:\wamp\www\QL_nha_hang\views\tin_tuc\v_tin_tuc_right.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588edf265b60b7_71117271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28ea293f973f94ddd36de248e7fc3f840170b1a2' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang\\views\\tin_tuc\\v_tin_tuc_right.tpl',
      1 => 1485758227,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_588edf265b60b7_71117271 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3 class="p1" style="margin-left:25px">Tin Tức Mới</h3>
<div>
<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 9+1 - (1) : 1-(9)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
	<!--item-->
  <div class="p2" style="float:right; margin:15px">
    <a href="#"><img src="public/images/tin_tuc/20110624153825trai-cay-la-7-1.jpg" alt="" width="180px" height="120px"></a>
    <h5 style="width:180px">No mắt ở Ngày hội cây trái ngon</h5>     
   </div>
   <!--item-->
   <?php }
}
?>

</div>

<?php }
}
