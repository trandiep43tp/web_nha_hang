<?php
/* Smarty version 3.1.30, created on 2017-02-11 14:49:15
  from "C:\wamp\www\QL_nha_hang2\views\mon_an\v_admin_mon_an.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589f246bc0f617_79644410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98c69061ca14ff94f21c7edb40b92354ff33eeeb' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang2\\views\\mon_an\\v_admin_mon_an.tpl',
      1 => 1486824547,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589f246bc0f617_79644410 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--viết java co nút xóa-->
<?php echo '<script'; ?>
 language="javascript">
	/*$(document).ready(function(e) {
		$('#xoa').click(function(){
			if(confirm("Bạn có chắc chắn muốn xóa"))
				{
					var ma_mon=$('#mamon').html();
					window.location="xoa_mon_an.php?ma_mon="+ma_mon;
				}
			});
	});
	*/	
	function xoa_mon_an(ma_mon)
	{
			if(confirm("Bạn có chắc chắn muốn xóa"))
			{
				window.location="xoa_mon_an.php?ma_mon="+ma_mon;
			}
	}
<?php echo '</script'; ?>
>
<h3 style="color:red; font-weight:bold">Món Ăn</h3>
<h3 align="center" style="color:red"> <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
 </h3>  <!--dùng để thông báo khi thêm, sửa, xóa-->
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mon_ans']->value, 'mon');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mon']->value) {
?>
  <tr>
    <td id="mamon"><?php echo $_smarty_tpl->tpl_vars['mon']->value->ma_mon;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['mon']->value->ten_mon;?>
</td>
    <td style="text-align:justify; padding:5px"><?php echo $_smarty_tpl->tpl_vars['mon']->value->noi_dung_tom_tat;?>
</td>
    <td><?php echo number_format($_smarty_tpl->tpl_vars['mon']->value->don_gia);?>
</td>
    <td><a href="sua_mon_an.php?ma_mon=<?php echo $_smarty_tpl->tpl_vars['mon']->value->ma_mon;?>
">Sửa</a></td>
    <td><a href="javascript:void(0)" id="xoa" onClick="xoa_mon_an(<?php echo $_smarty_tpl->tpl_vars['mon']->value->ma_mon;?>
)" >Xóa</a></td>
  </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
<div style="text-align:center; margin-top:35px"><?php echo $_smarty_tpl->tpl_vars['lst']->value;?>
</div>
<?php }
}
