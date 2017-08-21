<?php
/* Smarty version 3.1.30, created on 2017-01-31 16:00:12
  from "C:\wamp\www\QL_nha_hang\views\loai_mon_an\v_admin_them_loai_mon_an.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5890b48c0658c7_71067930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd35cf22454f26dfc8ee92814d78207e501a8dc3a' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang\\views\\loai_mon_an\\v_admin_them_loai_mon_an.tpl',
      1 => 1485876771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5890b48c0658c7_71067930 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Thêm Loại Món Ăn</h2>
<form method="post" name="frm" enctype="multipart/form-data">
<table width="700" border="0" cellspacing="40" cellpadding="15">
  <tr>
    <td>Tên Loại Món Ăn</td>
    <td><input type="text" name="ten_loai" size="30"/></td>
  </tr>
  <tr>
    <td>Mô Tả</td>
    <td><textarea name="mo_ta" rows="5" cols="50" style="text-align:justify"></textarea></td>
  </tr>
  <tr style="margin-bottom:20px">
    <td>Hình Ảnh</td>
    <td><input type="file" name="hinh"/></td>
  </tr>
  <tr align="center">
    <td colspan="2">
    <input class="btn btn-primary" type="submit" name="cap_nhat" value="Cập Nhật"/>&nbsp;&nbsp;&nbsp;
    <input class="btn btn-primary" type="button" name="bo_qua" value="Bỏ Qua" onClick="window.location='loai_mon_an.php'"/>
    </td>
    
  </tr>
</table>

</form><?php }
}
