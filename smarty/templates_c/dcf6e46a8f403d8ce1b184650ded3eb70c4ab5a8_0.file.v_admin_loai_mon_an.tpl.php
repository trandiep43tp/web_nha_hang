<?php
/* Smarty version 3.1.30, created on 2017-02-09 05:54:19
  from "C:\wamp\www\QL_nha_hang2\views\loai_mon_an\v_admin_loai_mon_an.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589c040bb76712_13979543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcf6e46a8f403d8ce1b184650ded3eb70c4ab5a8' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang2\\views\\loai_mon_an\\v_admin_loai_mon_an.tpl',
      1 => 1486536290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589c040bb76712_13979543 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--viết java cho nút xóa-->
<?php echo '<script'; ?>
 language="javascript">
	function xoaloaimonan(ma_loai)
	{
		if(confirm("Bạn có chắc chắn muốn xóa"))  <!--nếu đồng ý-->
		{
			window.location="xoa_loai_mon_an.php?ma_loai="+ma_loai;   <!--chuyển về trang xóa loại mon ăn-->
		}
	}
<?php echo '</script'; ?>
>
<h2>Loại Món Ăn</h2>
<h3 align="center" style="color:red"><?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
 <?php }?></h3>  <!--dùng để thông báo khi thêm, sửa, xóa-->
<table width="900" border="0" cellpadding="5" cellspacing="0">  
  <tr style="background-color:#0FF; color:#36F; text-align:center; height:30px">
    <td width="50px">Mã loại Món</td>
    <td width="100px">Tên loại Món</td>
    <td>Mô tả</td>
    <td width="150px">Hình</td>
    <td width="50px">&nbsp;</td>
    <td width="50px">&nbsp;</td>
  </tr>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['loai_mon_ans']->value, 'loai');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['loai']->value) {
?>
  <tr>
    <td align="center"><?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_loai;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['loai']->value->ten_loai;?>
</td>
    <td align="justify" style="padding:5px"><?php echo $_smarty_tpl->tpl_vars['loai']->value->mo_ta;?>
</td>
    <td align="justify"><img src="../public/images/hinh_loai_mon_an/<?php echo $_smarty_tpl->tpl_vars['loai']->value->hinh;?>
" width="60px" height="60px" style="margin-left:30px" ></td>
    <td align="center"><a href="sua_loai_mon_an.php?ma_loai=<?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_loai;?>
">Sửa</a></td>
    <td align="center"><a href="javascript:void(0)" onClick="xoaloaimonan(<?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_loai;?>
)">Xóa</a></td>
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
