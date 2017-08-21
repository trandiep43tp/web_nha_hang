<?php
/* Smarty version 3.1.30, created on 2017-02-01 08:26:44
  from "C:\wamp\www\QL_nha_hang1\views\mon_an\v_admin_mon_an.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58919bc4985c80_32485770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77edaaf77bf9d8fcd2b48ca3c0643beffbd2ad9f' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang1\\views\\mon_an\\v_admin_mon_an.tpl',
      1 => 1485882908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58919bc4985c80_32485770 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3>Món Ăn</h3>
<table width="800" border="1" cellspacing="5" cellpadding="5" style="text-align:center">
  <tr style="background-color:#3FC;">
    <td>Mã Món</td>
    <td width="100">Tên Món</td>
    <td>Nội Dung Tóm Tắt</td>
    <td width="100">Đơn giá</td>
    <td width="50">&nbsp;</td>
    <td width="50">&nbsp;</td>
  </tr>
  <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
  <tr>
    <td>1</td>
    <td>Bánh Canh</td>
    <td style="text-align:justify; padding:5px">Nguyên liệu: 3 quả dưa chuột, 3 quả cà chua, 1/2 quả dứa, xà lách xoăn, hành tây, tỏi, đường, dấm, ớt...</td>
    <td>25.000đ</td>
    <td><a href="sua_mon_an.php?ma_mon=1">Sửa</a></td>
    <td><a href="xoa_mon_an.php?ma_mon=1">Xóa</a></td>
  </tr>
  <?php }
}
?>

</table>
<?php }
}
