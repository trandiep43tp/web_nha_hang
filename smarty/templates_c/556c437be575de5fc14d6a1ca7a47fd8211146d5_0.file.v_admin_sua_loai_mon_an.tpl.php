<?php
/* Smarty version 3.1.30, created on 2017-02-08 05:52:46
  from "C:\wamp\www\QL_nha_hang2\views\loai_mon_an\v_admin_sua_loai_mon_an.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589ab22e75a222_24847738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '556c437be575de5fc14d6a1ca7a47fd8211146d5' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang2\\views\\loai_mon_an\\v_admin_sua_loai_mon_an.tpl',
      1 => 1486532432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589ab22e75a222_24847738 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--viết java kiểm tra dữ liệu sửa viết băng javascrip-->
<?php echo '<script'; ?>
 language="javascript">
	function kiemtradulieu()
	{
		var ten_loai=document.getElementById("ten_loai");
		if(ten_loai.value=="")
		{
			alert("Bạn phải nhập tên loại");
			ten_loai.focus();
			return false;
		}
		return true;
	}
<?php echo '</script'; ?>
>
<h2>Sửa Loại Món Ăn</h2>
<form method="post" name="frm" enctype="multipart/form-data">
<table width="700" border="1" cellspacing="40" cellpadding="15">
  <tr>
    <td>Tên Loại Món Ăn</td>
    <td><input type="text" name="ten_loai" id="ten_loai" size="30" value="<?php echo $_smarty_tpl->tpl_vars['loai']->value->ten_loai;?>
"/></td>
  </tr>
  <tr>
    <td>Mô Tả</td>
    <td ><textarea name="mo_ta" rows="5" cols="50" style="text-align:justify"><?php echo $_smarty_tpl->tpl_vars['loai']->value->mo_ta;?>

    </textarea></td>
  </tr>
  <tr>
  	<td>Hình Ảnh Cũ</td>
    <td><img src="../public/images/hinh_loai_mon_an/<?php echo $_smarty_tpl->tpl_vars['loai']->value->hinh;?>
" width="60px" height="60px"></td>
    
  </tr>
  <tr  >
    <td>Hình Ảnh Mới</td>
    <td><input type="file" name="hinh"/></td>
  </tr>
  <tr align="center">
    <td colspan="2">
    <input class="btn btn-primary" type="submit" name="cap_nhat" value="Cập Nhật" onClick=" return kiemtradulieu()"/>&nbsp;&nbsp;&nbsp;
    <input class="btn btn-primary" type="button" name="bo_qua" value="Bỏ Qua" onClick="window.location='loai_mon_an.php'"/>
    </td>
    
  </tr>
</table>

</form><?php }
}
