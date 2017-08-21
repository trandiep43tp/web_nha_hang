<?php
/* Smarty version 3.1.30, created on 2017-01-31 16:30:17
  from "C:\wamp\www\QL_nha_hang\views\mon_an\v_admin_sua_mon_an.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5890bb99366133_93423982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a3b1635d0375c23146c34c1604bdff40ee3736b' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang\\views\\mon_an\\v_admin_sua_mon_an.tpl',
      1 => 1485880063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5890bb99366133_93423982 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3>Sửa Món Ăn</h3>
<form method="post" enctype="multipart/form-data" name="frm">
<table width="800" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td>Tên Món</td>
    <td><input type="text" name="ten_mon"/></td>
  </tr>
  <tr>
    <td>Loại Món</td>
    <td>
        <select>
        	<option>Món Canh bổ dưỡng</option>
        </select>
    </td>
  </tr>
  <tr>
    <td>Nội Dung Tóm Tắt</td>
    <td><textarea name="noi_dung_tom_tat" rows="5" cols="50"></textarea></td>
  </tr>
  <tr>
     <td>Nội Dung Chi Tiết</td>
    <td><textarea name="noi_dung_chi_tiet" rows="5" cols="50"></textarea></td>
  </tr>
  <tr>
    <td>Đơn Giá</td>
    <td><input type="text" size="30" name="don_gia"/></td>
  </tr>
  <tr>
    <td>Đơn giá Khuyến Mãi</td>
    <td><input type="text" name="don_gia_khuyen_mai" size="30"/></td>
  </tr>
  <tr>
    <td>Khuyến Mãi</td>
    <td><input type="text" name="khuyen_mai" size="50"/></td>
  </tr>
  <tr>
    <td>Hình</td>
    <td><input type="file" name="hinh"/></td>
  </tr>
  <tr>
    <td>Ngày Cập Nhật</td>
    <td><input type="text" name="ngay_cap_nhat"/></td>
  </tr>
  <tr>
    <td>Đvt</td>
    <td><input type="text" name="dvt"/></td>
  </tr>
  <tr>
    <td>Trong Ngày</td>
    <td><input type="checkbox" name="trong_ngay"/> </td>
  </tr>
  <tr align="center">
    <td colspan="2">
    	<input type="submit" name="cap_nhat" value="Cập Nhật"/>&nbsp;&nbsp;
        <input type="button" name="bo_qua" value="Bỏ Qua" onClick="window.location='mon_an.php'"/>
    </td>    
  </tr>
</table>
</form><?php }
}
