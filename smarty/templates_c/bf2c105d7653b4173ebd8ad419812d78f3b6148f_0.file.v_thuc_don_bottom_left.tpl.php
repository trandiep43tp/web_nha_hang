<?php
/* Smarty version 3.1.30, created on 2017-02-19 09:29:32
  from "C:\xampp\htdocs\QL_nha_hang2\views\thuc_don\v_thuc_don_bottom_left.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a9576c467a56_32200089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf2c105d7653b4173ebd8ad419812d78f3b6148f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\QL_nha_hang2\\views\\thuc_don\\v_thuc_don_bottom_left.tpl',
      1 => 1486141404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a9576c467a56_32200089 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3 class="p1">Thực Đơn Tiệc Cưới</h3>
<div>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['thuc_dons']->value, 'thuc_don');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['thuc_don']->value) {
?>
	<!--item-->
  <div class="p2" style="float:left; margin:5px">
    <figure><a href="thuc_don.php?ma_thuc_don=<?php echo $_smarty_tpl->tpl_vars['thuc_don']->value->ma_thuc_don;?>
&page=<?php echo $_GET['page'];?>
"><img src="public/images/thuc_don/<?php echo $_smarty_tpl->tpl_vars['thuc_don']->value->hinh_thuc_don;?>
" alt="" width="130px" height="100px"></a></figure>
    <h5 align="center"><?php echo $_smarty_tpl->tpl_vars['thuc_don']->value->ten_thuc_don;?>
</h5>
    (Giá: <?php echo number_format($_smarty_tpl->tpl_vars['thuc_don']->value->don_gia);?>
đ/bàn) 
   </div>
   <!--item-->
   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  <div style="clear:both; text-align:center; padding:15px"><?php echo $_smarty_tpl->tpl_vars['lst']->value;?>
</div>
</div>
<?php }
}
