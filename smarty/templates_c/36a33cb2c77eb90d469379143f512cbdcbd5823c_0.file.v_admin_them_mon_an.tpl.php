<?php
/* Smarty version 3.1.30, created on 2017-02-11 03:53:59
  from "C:\wamp\www\QL_nha_hang2\views\mon_an\v_admin_them_mon_an.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589e8ad759fc14_48796890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36a33cb2c77eb90d469379143f512cbdcbd5823c' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang2\\views\\mon_an\\v_admin_them_mon_an.tpl',
      1 => 1486785233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589e8ad759fc14_48796890 (Smarty_Internal_Template $_smarty_tpl) {
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
<h3>Thêm Món Ăn</h3>
<form method="post" enctype="multipart/form-data" name="frm">
<table width="800" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td>Tên Món</td>
    <td><input type="text" name="ten_mon" id="ten_mon"/></td>
  </tr>
  <tr>
    <td>Loại Món</td>
    <td>
        <select name="ma_loai">
        	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['loai_mons']->value, 'loai');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['loai']->value) {
?>
        	<option value="<?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_loai;?>
"><?php echo $_smarty_tpl->tpl_vars['loai']->value->ten_loai;?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </select>
    </td>
  </tr>
  <tr>
    <td>Nội Dung Tóm Tắt</td>
    <td><textarea name="noi_dung_tom_tat" rows="5" cols="50"></textarea></td>
  </tr>
  <tr>
     <td>Nội Dung Chi Tiết</td>
    <td><textarea name="noi_dung_chi_tiet" rows="5" cols="50" class="ckeditor" id="noi_dung_chi_tiet"></textarea>
   <?php echo '<script'; ?>
 language="javascript">ckeditor.replace("noi_dung_chi_tiet")<?php echo '</script'; ?>
>
    </td>
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
    <td><input type="text" name="ngay_cap_nhat" id="ngay_cap_nhat"/></td>
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
    	<input type="submit" name="cap_nhat" value="Cập Nhật" id="cap_nhat"/>&nbsp;&nbsp;
        <input type="button" name="bo_qua" value="Bỏ Qua" onClick="window.location='mon_an.php'"/>
    </td>    
  </tr>
</table>
</form><?php }
}
