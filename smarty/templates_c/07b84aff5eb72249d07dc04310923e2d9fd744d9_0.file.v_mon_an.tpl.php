<?php
/* Smarty version 3.1.30, created on 2017-02-19 09:29:23
  from "C:\xampp\htdocs\QL_nha_hang2\views\mon_an\v_mon_an.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a957630d76d9_72346042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07b84aff5eb72249d07dc04310923e2d9fd744d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\QL_nha_hang2\\views\\mon_an\\v_mon_an.tpl',
      1 => 1486191728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a957630d76d9_72346042 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="main">
    <div class="container">
       <h3 class="prev-indent-bot"><?php echo $_smarty_tpl->tpl_vars['tieude_mon']->value;?>
</h3>
       <div>
       		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mon_ans']->value, 'mon_an');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mon_an']->value) {
?>
       		<!--item-->
            <div class="p4" style="width:220px; margin:5px; float:left">
                <figure><a class="lightbox-image" href="public/images/hinh_mon_an/<?php echo $_smarty_tpl->tpl_vars['mon_an']->value->hinh;?>
" data-gal="prettyPhoto[prettyPhoto]"><img src="public/images/hinh_mon_an/<?php echo $_smarty_tpl->tpl_vars['mon_an']->value->hinh;?>
" alt="" width="210px" height="125px"></a></figure>
                <h5 align="center"><a href="chi_tiet_mon_an.php?ma_mon=<?php echo $_smarty_tpl->tpl_vars['mon_an']->value->ma_mon;?>
"><?php echo $_smarty_tpl->tpl_vars['mon_an']->value->ten_mon;?>
<a> </h5>
                <p class="p1 hide"><?php echo $_smarty_tpl->tpl_vars['mon_an']->value->noi_dung_tom_tat;?>
</p>   <!--class hide này viết trong css để nếu nội dung dài quá thì sẽ ẩn đi tránh là cho định dạng thay đổi-->
                <p class="p2"><strong class="color-2">Giá: <?php echo number_format($_smarty_tpl->tpl_vars['mon_an']->value->don_gia);?>
đ/đĩa - SL: <input type="text" value="1" size="3"/></strong></p>
                <a class="button-1" href="#">Mua</a>
            </div>
            <!--item-->
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <div style="clear:both; padding:20px; text-align:center"><?php echo $_smarty_tpl->tpl_vars['lst']->value;?>
</div>
       </div>
    </div>
</div><?php }
}
