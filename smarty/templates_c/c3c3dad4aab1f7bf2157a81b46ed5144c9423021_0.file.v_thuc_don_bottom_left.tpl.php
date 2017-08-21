<?php
/* Smarty version 3.1.30, created on 2017-01-28 16:39:07
  from "C:\wamp\www\QL_nha_hang\views\thuc_don\v_thuc_don_bottom_left.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588cc92b2b2a83_89909815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3c3dad4aab1f7bf2157a81b46ed5144c9423021' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang\\views\\thuc_don\\v_thuc_don_bottom_left.tpl',
      1 => 1485621541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_588cc92b2b2a83_89909815 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3 class="p1">Thực Đơn Tiệc Cưới</h3>
<div>
<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 1+1 - (1) : 1-(1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
	<!--item-->
  <div class="p2" style="float:left; margin:5px">
    <figure><a href="#"><img src="public/images/thuc_don/thuc_don_1.jpg" alt="" width="130px" height="100px"></a></figure>
    <h5>Thực Đơn 1</h5>
    (Giá: 1.195.000đ/bàn) 
   </div>
   <!--item-->
   <?php }
}
?>

</div>
<?php }
}
