<?php
/* Smarty version 3.1.30, created on 2017-02-04 15:27:06
  from "C:\wamp\www\QL_nha_hang2\views\mon_an\v_chi_tiet_mon_an.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5895f2ca079819_09475308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd715c97c4f75c80a3f528b3949fa5a483aca339' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang2\\views\\mon_an\\v_chi_tiet_mon_an.tpl',
      1 => 1486222011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5895f2ca079819_09475308 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="main">
    <div class="container">
    	<div>
        	 <h3 class="prev-indent-bot"><?php echo $_smarty_tpl->tpl_vars['mon_an']->value->ten_mon;?>
</h3>
            <img src="public/images/hinh_mon_an/<?php echo $_smarty_tpl->tpl_vars['mon_an']->value->hinh;?>
" alt="" width="300px" style="float:left; margin-right:5px">
            <h5><?php echo $_smarty_tpl->tpl_vars['mon_an']->value->noi_dung_tom_tat;?>
</h5>
            <p class="p1"><?php echo $_smarty_tpl->tpl_vars['mon_an']->value->noi_dung_chi_tiet;?>
</p>
            <p class="p1">Khuyến mãi: <?php echo $_smarty_tpl->tpl_vars['mon_an']->value->khuyen_mai;?>
</p>
            <p class="p2"><strong class="color-2">Giá: <?php echo number_format($_smarty_tpl->tpl_vars['mon_an']->value->don_gia);?>
đ/đĩa - SL: <input type="text" value="1" size="3"/></strong></p>
            <a class="button-1" href="#">Mua</a>
    	</div>
        <div style="clear:both; padding:15px"></div>  
        
        <h3 class="prev-indent-bot"><?php echo $_smarty_tpl->tpl_vars['tieude_mon']->value;?>
</h3>
       <div>
       		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mon_an_cung_loai']->value, 'mon');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mon']->value) {
?>
       		<!--item-->
            <div class="p4" style="width:220px; margin:5px; float:left">
                <figure><a class="lightbox-image" href="public/images/hinh_mon_an/<?php echo $_smarty_tpl->tpl_vars['mon']->value->hinh;?>
" data-gal="prettyPhoto[prettyPhoto]"><img src="public/images/hinh_mon_an/<?php echo $_smarty_tpl->tpl_vars['mon']->value->hinh;?>
" alt="" width="210px" height="125px"></a></figure>
                <h5><a href="chi_tiet_mon_an.php?ma_mon=<?php echo $_smarty_tpl->tpl_vars['mon']->value->ma_mon;?>
&page=<?php echo $_smarty_tpl->tpl_vars['curpage']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['mon']->value->ten_mon;?>
<a> </h5>
                <p class="p1"><?php echo $_smarty_tpl->tpl_vars['mon']->value->noi_dung_tom_tat;?>
</p>
                <p class="p2"><strong class="color-2">Giá: <?php echo number_format($_smarty_tpl->tpl_vars['mon']->value->don_gia);?>
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
