<?php
/* Smarty version 3.1.30, created on 2017-01-29 12:19:27
  from "C:\wamp\www\QL_nha_hang\views\mon_an\v_chi_tiet_mon_an.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588dddcf6ef282_10384129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12bfd7a1d5e9f9feb0cac11b6096032115a77612' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang\\views\\mon_an\\v_chi_tiet_mon_an.tpl',
      1 => 1485692362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_588dddcf6ef282_10384129 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="main">
    <div class="container">
    	<div>
        	 <h3 class="prev-indent-bot">Bánh Canh</h3>
            <img src="public/images/hinh_mon_an/banh-canh-thit.jpg" alt="" width="300px" style="float:left; margin-right:5px">
            <h5>Nguyên liệu: 3 quả dưa chuột, 3 quả cà chua, 1/2 quả dứa, xà lách xoăn, hành tây, tỏi, đường, dấm, ớt...</h5>
            <p class="p1">Được làm từ bột gạo, bột mì, hoặc bột sắn hoặc bột gạo pha bột sắn cán thành tấm và cắt ra thành sợi to và ngắn với nước dùng được nấu từ tôm, cá, giò heo... thêm gia vị tùy theo từng loại.</p>
            <p class="p1">Khuyến mãi: nước ngọt, khăn lạnh</p>
            <p class="p2"><strong class="color-2">Giá: 25000đ/đĩa - SL: <input type="text" value="1" size="3"/></strong></p>
            <a class="button-1" href="#">Mua</a>
    	</div>
        <div style="clear:both"></div>  
        
        <h3 class="prev-indent-bot">Món Ăn Cùng Danh Mục</h3>
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
