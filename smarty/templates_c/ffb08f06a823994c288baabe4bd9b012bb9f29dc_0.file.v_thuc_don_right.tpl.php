<?php
/* Smarty version 3.1.30, created on 2017-02-19 09:29:32
  from "C:\xampp\htdocs\QL_nha_hang2\views\thuc_don\v_thuc_don_right.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a9576c48ace4_71826165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffb08f06a823994c288baabe4bd9b012bb9f29dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\QL_nha_hang2\\views\\thuc_don\\v_thuc_don_right.tpl',
      1 => 1486138962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a9576c48ace4_71826165 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3>Chi Tiết Thực Đơn</h3>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ct_thuc_dons']->value, 'mon');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mon']->value) {
?>
<!--item-->
<div style="margin-top:10px; border-bottom:#999 dashed 1px; padding-bottom:10px">  
  <img src="public/images/hinh_mon_an/<?php echo $_smarty_tpl->tpl_vars['mon']->value->hinh;?>
" alt="" width="210px" height="135px" style="float:right"> 
  <h4><?php echo $_smarty_tpl->tpl_vars['mon']->value->ten_mon;?>
 - giá: <?php echo number_format($_smarty_tpl->tpl_vars['mon']->value->don_gia);?>
đ</h4>
  <?php echo $_smarty_tpl->tpl_vars['mon']->value->noi_dung_tom_tat;?>

  <a class="button-1" href="chi_tiet_mon_an.php?ma_mon=<?php echo $_smarty_tpl->tpl_vars['mon']->value->ma_mon;?>
">Xem Tiếp</a> 
</div>
<!--item-->
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
}
}
