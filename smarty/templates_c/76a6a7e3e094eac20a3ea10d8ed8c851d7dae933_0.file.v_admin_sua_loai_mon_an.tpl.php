<?php
/* Smarty version 3.1.30, created on 2017-01-31 15:38:50
  from "C:\wamp\www\QL_nha_hang\views\loai_mon_an\v_admin_sua_loai_mon_an.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5890af8a59afd2_97694583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76a6a7e3e094eac20a3ea10d8ed8c851d7dae933' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang\\views\\loai_mon_an\\v_admin_sua_loai_mon_an.tpl',
      1 => 1485877124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5890af8a59afd2_97694583 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Sửa Loại Món Ăn</h2>
<form method="post" name="frm" enctype="multipart/form-data">
<table width="700" border="1" cellspacing="40" cellpadding="15">
  <tr>
    <td>Tên Loại Món Ăn</td>
    <td><input type="text" name="ten_loai" size="30" value="Món Canh Bổ Dưỡng"/></td>
  </tr>
  <tr>
    <td>Mô Tả</td>
    <td ><textarea name="mo_ta" rows="5" cols="50" style="text-align:justify">Mùi thơm của cá quyện với vị ngọt của hoa thiên lý sẽ mang đến cho cả nhà một tô canh ngọt ngào và bổ dưỡng. Bạn có muốn biết thêm nhiều công thức món canh ngon hấp dẫn khác của người Việt Nam?
    </textarea></td>
  </tr>
  <tr>
  	<td>Hình Ảnh Cũ</td>
    <td><img src="../public/images/hinh_loai_mon_an/banh_man.jpg" width="60px" height="60px"></td>
    
  </tr>
  <tr style="margin-top:20" >
    <td>Hình Ảnh Mới</td>
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
