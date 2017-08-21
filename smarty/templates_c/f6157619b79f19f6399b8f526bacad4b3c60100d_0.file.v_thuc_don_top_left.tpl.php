<?php
/* Smarty version 3.1.30, created on 2017-02-03 16:00:12
  from "C:\wamp\www\QL_nha_hang2\views\thuc_don\v_thuc_don_top_left.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5894a90c4912e7_92858954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6157619b79f19f6399b8f526bacad4b3c60100d' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang2\\views\\thuc_don\\v_thuc_don_top_left.tpl',
      1 => 1486137609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5894a90c4912e7_92858954 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="img-indent-bot">
          <h3 class="prev-indent-bot"><?php echo $_smarty_tpl->tpl_vars['thuc_don']->value->ten_thuc_don;?>
</h3>
          <div class="wrapper img-indent-bot">
            <figure class="img-indent"><img src="public/images/thuc_don/<?php echo $_smarty_tpl->tpl_vars['thuc_don']->value->hinh_thuc_don;?>
" alt="" style="width:210px; height:135px"></figure>
            <div class="extra-wrap">              
              <?php echo $_smarty_tpl->tpl_vars['thuc_don']->value->noi_dung;?>

              <h5>Giá: <?php echo number_format($_smarty_tpl->tpl_vars['thuc_don']->value->don_gia);?>
đ/bàn </h5>
             </div>
            <input type="text" value="1" style="width:33px; height:33px; text-align:center; margin-right:3px"/> 
             <a class="button-1" href="#">Mua</a> </div>
          </div>
         <?php }
}
