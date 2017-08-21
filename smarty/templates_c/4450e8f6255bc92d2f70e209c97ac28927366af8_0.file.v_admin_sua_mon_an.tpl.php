<?php
/* Smarty version 3.1.30, created on 2017-02-11 17:18:54
  from "C:\wamp\www\QL_nha_hang2\views\mon_an\v_admin_sua_mon_an.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589f477e971b04_08964584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4450e8f6255bc92d2f70e209c97ac28927366af8' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang2\\views\\mon_an\\v_admin_sua_mon_an.tpl',
      1 => 1486833523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589f477e971b04_08964584 (Smarty_Internal_Template $_smarty_tpl) {
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

<h3>Sửa Món Ăn</h3>
<form method="post" enctype="multipart/form-data" name="frm">
<table width="800" border="0"  cellspacing="5" cellpadding="5">
  <tr >
    <td>Tên Món</td>
    <td><input type="text" name="ten_mon" value="<?php echo $_smarty_tpl->tpl_vars['mon_an']->value->ten_mon;?>
"/></td>
  </tr>
  <tr>
    <td>Loại Món</td>
    <td>
        <select name="ma_loai" >
        	<?php if (isset($_smarty_tpl->tpl_vars['loai_mon']->value)) {?>
            	<option value="<?php echo $_smarty_tpl->tpl_vars['loai_mon']->value->ma_loai;?>
"><?php echo $_smarty_tpl->tpl_vars['loai_mon']->value->ten_loai;?>
</option>
            <?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['loai_mons']->value, 'loai');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['loai']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['loai']->value->ma_loai != $_smarty_tpl->tpl_vars['loai_mon']->value->ma_loai) {?>    <!--có đòng if này để tránh trùng dữ liệu-->        
        	<option value="<?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_loai;?>
" ><?php echo $_smarty_tpl->tpl_vars['loai']->value->ten_loai;?>
</option>
            <?php }?>
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
    <td><textarea name="noi_dung_tom_tat" rows="5" cols="50" ><?php echo $_smarty_tpl->tpl_vars['mon_an']->value->noi_dung_tom_tat;?>
</textarea></td>
  </tr>
  <tr>
     <td>Nội Dung Chi Tiết</td>
    <td><textarea name="noi_dung_chi_tiet" rows="5" cols="50" class="ckeditor" id="noi_dung_chi_tiet"><?php echo $_smarty_tpl->tpl_vars['mon_an']->value->noi_dung_chi_tiet;?>
</textarea>
    <?php echo '<script'; ?>
 language="javascript">CKEDITOR.replace("noi_dung_chi_tiet")<?php echo '</script'; ?>
>
    </td>
  </tr>
  <tr>
    <td>Đơn Giá</td>
    <td><input type="text" size="30" name="don_gia" value="<?php echo $_smarty_tpl->tpl_vars['mon_an']->value->don_gia;?>
"/></td>
  </tr>
  <tr>
    <td>Đơn giá Khuyến Mãi</td>
    <td><input type="text" name="don_gia_khuyen_mai" size="30" value="<?php echo $_smarty_tpl->tpl_vars['mon_an']->value->don_gia_khuyen_mai;?>
"/></td>
  </tr>
  <tr>
    <td>Khuyến Mãi</td>
    <td><input type="text" name="khuyen_mai" size="50" value="<?php echo $_smarty_tpl->tpl_vars['mon_an']->value->khuyen_mai;?>
"/></td>
  </tr>
   <tr>
    <td>Hình Ảnh Cũ</td>
    <td><img src="../public/images/hinh_mon_an/<?php echo $_smarty_tpl->tpl_vars['mon_an']->value->hinh;?>
" width="80px" height="80px"></td>
  </tr>
  <tr>
    <td>Hình Ảnh mới</td>
    <td><input type="file" name="hinh"/></td>
  </tr>
  <tr>
    <td>Ngày Cập Nhật</td>
    <td><input type="date" name="ngay_cap_nhat"  value="<?php echo $_smarty_tpl->tpl_vars['mon_an']->value->ngay_cap_nhat;?>
"/></td>
  </tr>
  <tr>
    <td>Đvt</td>
    <td><input type="text" name="dvt" value="<?php echo $_smarty_tpl->tpl_vars['mon_an']->value->dvt;?>
"/></td>
  </tr>
  <tr>
    <td>Trong Ngày</td>
    <td><input type="checkbox" name="trong_ngay" <?php if ($_smarty_tpl->tpl_vars['mon_an']->value->trong_ngay == 1) {?> <?php echo "checked";?>
 <?php }?>/> </td>
  </tr>
  <tr align="center">
    <td colspan="2">
    	<input type="submit" class="btn btn-primary"  name="cap_nhat" value="Cập Nhật"/>&nbsp;&nbsp;
        <input type="button" class="btn btn-primary" name="bo_qua" value="Bỏ Qua" onClick="window.location='mon_an.php'"/>
    </td>    
  </tr>
</table>
</form><?php }
}
