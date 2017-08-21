<?php
/* Smarty version 3.1.30, created on 2017-01-29 12:02:33
  from "C:\wamp\www\QL_nha_hang\views\mon_an\v_mon_an.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588dd9d9e28988_94951845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '495a590d092066b96d69ef96f60f8d7337f19d2a' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang\\views\\mon_an\\v_mon_an.tpl',
      1 => 1485691347,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_588dd9d9e28988_94951845 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="main">
    <div class="container">
       <h3 class="prev-indent-bot"><?php echo $_smarty_tpl->tpl_vars['tieude_mon']->value;?>
</h3>
       <div>
       		<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
       		<!--item-->
            <div class="p4" style="width:220px; margin:5px; float:left">
                <figure><a class="lightbox-image" href="public/images/hinh_mon_an/banh-canh-thit.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="public/images/hinh_mon_an/banh-canh-thit.jpg" alt="" width="210px" height="125px"></a></figure>
                <h5><a href="chi_tiet_mon_an.php?ma_mon=1">Bánh Canh<a> </h5>
                <p class="p1">Nguyên liệu: 3 quả dưa chuột, 3 quả cà chua, 1/2 quả dứa, xà lách xoăn, hành tây, tỏi, đường, dấm, ớt...</p>
                <p class="p2"><strong class="color-2">Giá: 25000đ/đĩa - SL: <input type="text" value="1" size="3"/></strong></p>
                <a class="button-1" href="#">Mua</a>
            </div>
            <!--item-->
            <?php }
}
?>

            <div style="clear:both"></div>
       </div>
    </div>
</div><?php }
}
