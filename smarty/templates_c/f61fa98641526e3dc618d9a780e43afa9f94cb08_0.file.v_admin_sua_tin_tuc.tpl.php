<?php
/* Smarty version 3.1.30, created on 2017-02-14 05:21:52
  from "C:\wamp\www\QL_nha_hang2\views\tin_tuc\v_admin_sua_tin_tuc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a293f0c21f35_15303331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f61fa98641526e3dc618d9a780e43afa9f94cb08' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang2\\views\\tin_tuc\\v_admin_sua_tin_tuc.tpl',
      1 => 1487049709,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a293f0c21f35_15303331 (Smarty_Internal_Template $_smarty_tpl) {
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
    $( "#ngay_dang" ).datepicker({
		changeMonth: true,
      	changeYear: true
	  });
	$( "#ngay_dang" ).datepicker( "option", "dateFormat", "yy-mm-dd" ); <!--format ngày tháng-->
	
	$( "#ngay_gui" ).datepicker({
		changeMonth: true,
      	changeYear: true
	  });
	$( "#ngay_gui" ).datepicker( "option", "dateFormat", "yy-mm-dd" ); <!--format ngày tháng-->
	
  } );
  <?php echo '</script'; ?>
>
<!--/jquery ui datepicker-->

<!--viết code để kiểm tra dữ liệu dữ liệu-->
<?php echo '<script'; ?>
 language="javascript">
$(document).ready(function(e) {
	$('#cap_nhat').click(function(){
		var tieude=$("#tieu_de");
		 if(tieude.val()=="")
		 {
			 alert("Bạn phải nhập tiêu đề tin tức");
			 tieude.focus();
			 return false;
		 }
		 return true;
	})
   
});
<?php echo '</script'; ?>
>
<h2>Sửa Tin Tức</h2>
<form method="post" name="frm" enctype="multipart/form-data">
<table class="" width="900" border="0" cellspacing="0" cellpadding="15">
  <tr >
    <td>Tiêu Đề</td>
    <td><input type="text" name="tieu_de" id="tieu_de" size="30" value="<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->tieu_de;?>
"/></td>
  </tr>
  <tr>
    <td>Nội Dung Tóm Tắt</td>
    <td><textarea name="noi_dung_tom_tat" rows="5" cols="50" style="text-align:justify"><?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->tom_tat;?>
</textarea></td>
  </tr>
   <tr>
     <td>Nội Dung Chi Tiết</td>
    <td><textarea name="noi_dung_chi_tiet" rows="5" cols="50" class="ckeditor" id="noi_dung_chi_tiet"><?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->chi_tiet;?>
</textarea>
   <?php echo '<script'; ?>
 language="javascript">ckeditor.replace("noi_dung_chi_tiet")<?php echo '</script'; ?>
>
    </td>
  </tr>
   <tr style="margin-bottom:20px">
    <td>Hình Ảnh Cũ</td>
    <td><img src="../public/images/tin_tuc/<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->hinh;?>
"/></td>
  </tr>
  <tr style="margin-bottom:20px">
    <td>Hình Ảnh Mới</td>
    <td><input type="file" name="hinh"/></td>
  </tr>
   <tr>
    <td>Tác giả</td>
    <td><input type="text" name="tac_gia"  size="30" value="<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->tac_gia;?>
"/></td>
  </tr>
   <tr>
    <td>Ngày Đăng</td>
    <td><input type="date" name="ngay_dang"  value="<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->ngay_dang;?>
"/></td>
  </tr>
   <tr>
    <td>Ngày Gửi</td>
    <td><input type="date" name="ngay_gui"   value="<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->ngay_gui;?>
"/></td>
  </tr>
   <tr>
    <td>Số lượt xem</td>
    <td><input type="text" name="so_luot_xem" value="<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->so_luot_xem;?>
" /></td>
  </tr>
  
  <tr align="center">
    <td colspan="2">
    <input class="btn btn-primary" type="submit" name="cap_nhat" id="cap_nhat" value="Cập Nhật"/>&nbsp;&nbsp;&nbsp;
    <input class="btn btn-primary" type="button" name="bo_qua" value="Bỏ Qua" onClick="window.location='danh_sach_tin_tuc.php'"/>
    </td>    
  </tr>
</table>

</form><?php }
}
