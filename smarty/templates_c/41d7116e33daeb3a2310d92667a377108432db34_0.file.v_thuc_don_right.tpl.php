<?php
/* Smarty version 3.1.30, created on 2017-01-28 17:53:34
  from "C:\wamp\www\QL_nha_hang\views\thuc_don\v_thuc_don_right.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588cda9e4a6d29_84514415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41d7116e33daeb3a2310d92667a377108432db34' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang\\views\\thuc_don\\v_thuc_don_right.tpl',
      1 => 1485626005,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_588cda9e4a6d29_84514415 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3>Chi Tiết Thực Đơn</h3>
<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 1+1 - (1) : 1-(1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
<!--item-->
<div style="margin-top:10px; border-bottom:#999 dashed 1px; padding-bottom:10px">  
  <img src="public/images/hinh_mon_an/banh-canh-thit.jpg" alt="" width="210px" height="135px" style="float:right"> 
  <h4>Bánh Canh - giá: 25000đ</h4>
  Nguyên liệu: 3 quả dưa chuột, 3 quả cà chua, 1/2 quả dứa, xà lách xoăn, hành tây, tỏi, đường, dấm, ớt...
  <a class="button-1" href="#">Xem Tiếp</a> 
</div>
<!--item-->
<?php }
}
}
}
