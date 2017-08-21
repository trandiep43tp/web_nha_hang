<?php
/* Smarty version 3.1.30, created on 2017-02-03 16:22:55
  from "C:\wamp\www\QL_nha_hang2\views\thuc_don\v_thuc_don_right.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5894ae5f102d08_90375590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '926f76099aef8046f8deaeed0f72c842b42bed45' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang2\\views\\thuc_don\\v_thuc_don_right.tpl',
      1 => 1486138961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5894ae5f102d08_90375590 (Smarty_Internal_Template $_smarty_tpl) {
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
