<?php
/* Smarty version 3.1.30, created on 2017-02-01 08:27:45
  from "C:\wamp\www\QL_nha_hang1\views\thuc_don\v_thuc_don.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58919c01a33932_95046210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11fec04e105f9212f0fe1a21e9746be03e875633' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang1\\views\\thuc_don\\v_thuc_don.tpl',
      1 => 1485693337,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/thuc_don/v_thuc_don_top_left.tpl' => 1,
    'file:views/thuc_don/v_thuc_don_bottom_left.tpl' => 1,
    'file:views/thuc_don/v_thuc_don_right.tpl' => 1,
  ),
),false)) {
function content_58919c01a33932_95046210 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="main">
  <div class="wrapper">
    <article class="col-1">
          <div class="indent-left">
            <?php $_smarty_tpl->_subTemplateRender("file:views/thuc_don/v_thuc_don_top_left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php $_smarty_tpl->_subTemplateRender("file:views/thuc_don/v_thuc_don_bottom_left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

          </div>
    </article>
    <article class="col-2">
      	 <?php $_smarty_tpl->_subTemplateRender("file:views/thuc_don/v_thuc_don_right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

   </article>
  </div>
</div>
<?php }
}
