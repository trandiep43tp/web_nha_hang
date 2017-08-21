<?php
/* Smarty version 3.1.30, created on 2017-02-14 05:41:43
  from "C:\wamp\www\QL_nha_hang2\views\tin_tuc\v_admin_tin_tuc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a29897b20991_09524055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3b501ac1fcfde5ee49fd7ad8395080dec0d6a52' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang2\\views\\tin_tuc\\v_admin_tin_tuc.tpl',
      1 => 1487050867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a29897b20991_09524055 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--viết java cho nút xóa-->
<?php echo '<script'; ?>
 language="javascript">
	function xoatintuc(ma_tin_tuc)
	{
		if(confirm("Bạn có chắc chắn muốn xóa"))  <!--nếu đồng ý-->
		{
			window.location="xoa_tin_tuc.php?ma_tin_tuc="+ma_tin_tuc;   <!--chuyển về trang xóa loại mon ăn-->
		}
	}
<?php echo '</script'; ?>
>
<h2>Tin Tức</h2>
<h3 align="center" style="color:red"><?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
 <?php }?></h3>  <!--dùng để thông báo khi thêm, sửa, xóa-->
<table width="900" border="0" cellpadding="5" cellspacing="0">  
  <tr style="background-color:#0FF; color:#36F; text-align:center; height:30px">
    <td width="100px">Mã Tin Tức</td>
    <td width="100px">Tiêu Đề</td>
    <td>Nội Dung Tóm Tắt</td>
    <td width="150px">Hình</td>
    <td width="50px">&nbsp;</td>
    <td width="50px">&nbsp;</td>
  </tr>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tin_tucs']->value, 'tin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tin']->value) {
?>
  <tr>
    <td align="center"><?php echo $_smarty_tpl->tpl_vars['tin']->value->ma_tin_tuc;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['tin']->value->tieu_de;?>
</td>
    <td align="justify" style="padding:5px"><?php echo $_smarty_tpl->tpl_vars['tin']->value->tom_tat;?>
</td>
    <td align="justify"><img src="../public/images/tin_tuc/<?php echo $_smarty_tpl->tpl_vars['tin']->value->hinh;?>
" width="60px" height="60px" style="margin-left:30px" ></td>
    <td align="center"><a href="sua_tin_tuc.php?ma_tin_tuc=<?php echo $_smarty_tpl->tpl_vars['tin']->value->ma_tin_tuc;?>
">Sửa</a></td>
    <td align="center"><a href="javascript:void(0)" onClick="xoatintuc(<?php echo $_smarty_tpl->tpl_vars['tin']->value->ma_tin_tuc;?>
)" >Xóa</a></td>
    <!--khi click vào nút xóa thì sự kiện onclick sẽ chạy-->
  </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

 
</table>
<div style="clear:both; text-align:center; margin-top:25px"><?php echo $_smarty_tpl->tpl_vars['lst']->value;?>
</div><?php }
}
