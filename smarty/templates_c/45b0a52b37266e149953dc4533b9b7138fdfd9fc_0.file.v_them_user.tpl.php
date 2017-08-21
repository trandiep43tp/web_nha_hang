<?php
/* Smarty version 3.1.30, created on 2017-02-14 07:28:20
  from "C:\wamp\www\QL_nha_hang2\views\user\v_them_user.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a2b194000579_85506598',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45b0a52b37266e149953dc4533b9b7138fdfd9fc' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang2\\views\\user\\v_them_user.tpl',
      1 => 1487057297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a2b194000579_85506598 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--chèn ckeditor-->
<!--<?php echo '<script'; ?>
 type="text/javascript" src="../public/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>-->
<?php echo '<script'; ?>
 type="text/javascript" src="../public/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>

<!--chèn jquery ui datepicker-->
	<!--trong input ngay cap nhat cho id= ngay_cap_nhat-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">  
  <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-1.12.4.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
  $( function() {
    $( "#ngay_cap_nhat" ).datepicker({
		changeMonth: true,
      	changeYear: true
	  });
	$( "#ngay_cap_nhat" ).datepicker( "option", "dateFormat", "yy-mm-dd" ); <!--format ngày tháng-->
  } );
  <?php echo '</script'; ?>
>

<!--/jquery ui datepicker-->
<!--viết javascrip để kiểm tra  dữ liệu khi nhập-->
<?php echo '<script'; ?>
 language="javascript">
$(document).ready(function(e) {
    $('#cap_nhat').click(function(){
		var ten_mon=$('#ten_mon');
		if(ten_mon.val()=="")
		{
			alert("Bạn phải nhập tên món");
			ten_mon.focus();
			return false;
		}
		return true;
		})
});
<?php echo '</script'; ?>
>
<!--hết kiểm tra dữ liệu-->
<h3>Thêm User</h3>
<form method="post" enctype="multipart/form-data" name="frm">
<table class="table" width="800" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td>User Name</td>
    <td><input type="text" name="username" /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password"/>   </td>
  </tr>
  <tr>
    <td>Full Name</td>
    <td><input type="text" name="fullname"/></td>
  </tr>
   <tr>
    <td>Birthday</td>
    <td><input type="text" name="birthday" id="ngay_cap_nhat"/></td>
  </tr>
  <tr>
    <td>Gender</td>
    <td>
        <input type="radio" name="gioi_tinh" value="Nam"/> Nam &nbsp;&nbsp;  &nbsp;&nbsp;
        <input type="radio" name="gioi_tinh" value="Nu" /> Nữ
     </td>
  </tr>
  <tr>
    <td>Address</td>
    <td><input type="text" name="address" size="50"/></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="text" name="email"/></td>
  </tr>
  <tr>
    <td>Indentity Card</td>
    <td><input type="text" name="card"/></td>
  </tr>
 
  <tr>
    <td>Mobiphone</td>
    <td><input type="text" name="mobiphone"/></td>
  </tr>
  <tr>
    <td>Quyền</td>
    <td><input type="" name="trong_ngay"/> </td>
  </tr>
  <tr align="center">
    <td colspan="2">
    	<input class="btn btn-primary" type="submit" name="cap_nhat" value="Cập Nhật" id="cap_nhat"/>&nbsp;&nbsp;
        <input class="btn btn-primary" type="button" name="bo_qua" value="Bỏ Qua" onClick="window.location='danh_sach_user.php'"/>
    </td>    
  </tr>
</table>
</form><?php }
}
