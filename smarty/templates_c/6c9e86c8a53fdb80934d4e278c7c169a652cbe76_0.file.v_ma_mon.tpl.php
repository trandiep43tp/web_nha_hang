<?php
/* Smarty version 3.1.30, created on 2017-01-25 15:18:04
  from "C:\wamp\www\QL_nha_hang\views\mon_an\v_ma_mon.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5888c1acd9e7d4_96317679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c9e86c8a53fdb80934d4e278c7c169a652cbe76' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang\\views\\mon_an\\v_ma_mon.tpl',
      1 => 1485357482,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5888c1acd9e7d4_96317679 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3 align="center">Danh Sách Loại Món Ăn</h3>
<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
<a href="#">Bún, mì, miến, phở</a><br>
<a href="#">Cơm</a><br>
<?php }
}
}
}
