<?php
/* Smarty version 3.1.30, created on 2017-02-01 08:25:59
  from "C:\wamp\www\QL_nha_hang1\views\loai_mon_an\v_admin_loai_mon_an.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58919b976010d8_63889487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd840683ad50ed0485a81ae92f62bdd87859ca16c' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang1\\views\\loai_mon_an\\v_admin_loai_mon_an.tpl',
      1 => 1485877332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58919b976010d8_63889487 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Loại Món Ăn</h2>
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
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
  <tr>
    <td align="center">1</td>
    <td>Món Canh Bổ Dưỡng</td>
    <td align="justify" style="padding:5px">Mùi thơm của cá quyện với vị ngọt của hoa thiên lý sẽ mang đến cho cả nhà một tô canh ngọt ngào và bổ dưỡng. Bạn có muốn biết thêm nhiều công thức món canh ngon hấp dẫn khác của người Việt Nam?</td>
    <td align="justify"><img src="../public/images/hinh_loai_mon_an/banh_man.jpg" width="60px" height="60px" style="margin-left:30px" ></td>
    <td align="center"><a href="sua_loai_mon_an.php?ma_loai=1">Sửa</a></td>
    <td align="center"><a href="xoa_loai_mon_an.php?ma_loai=1">Xóa</a></td>
  </tr>
  <?php }
}
?>

</table>
<?php }
}
