<?php
/* Smarty version 3.1.30, created on 2017-02-14 06:24:53
  from "C:\wamp\www\QL_nha_hang2\views\user\v_danh_sach_user.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a2a2b551dfe4_11262493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bee2f0187f3ca924fc1448f36670d2763de33b0' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang2\\views\\user\\v_danh_sach_user.tpl',
      1 => 1487053480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a2a2b551dfe4_11262493 (Smarty_Internal_Template $_smarty_tpl) {
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
<h3 style="color:red; font-weight:bold">Danh Sách User</h3>
<h3 align="center" style="color:red"> <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
 </h3>  <!--dùng để thông báo khi thêm, sửa, xóa-->
<table width="800" border="1" cellspacing="5" cellpadding="5" style="text-align:center">
  <tr style="background-color:#3FC;">
    <td>Mã user</td>
    <td width="100">Tên Đăng Nhập</td>
    <td>Tên Đầy Đủ</td>
    <td width="100">Địa Chỉ</td>
    <td width="100">Điện Thoại</td>
    <td width="50">&nbsp;</td>
    <td width="50">&nbsp;</td>
  </tr>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
  <tr>
    <td id="mamon"><?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</td>
    <td style="text-align:justify; padding:5px"><?php echo $_smarty_tpl->tpl_vars['user']->value->fullname;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->address;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->mobiphone;?>
</td>
    <td><a href="#">Sửa</a></td>
    <td><a href="#" id="xoa" onClick="" >Xóa</a></td>
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
