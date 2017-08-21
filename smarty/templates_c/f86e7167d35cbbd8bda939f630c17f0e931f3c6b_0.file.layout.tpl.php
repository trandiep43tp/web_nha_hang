<?php
/* Smarty version 3.1.30, created on 2017-01-30 07:38:26
  from "C:\wamp\www\QL_nha_hang\smarty\templates\admin\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588eed72efe821_51194650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f86e7167d35cbbd8bda939f630c17f0e931f3c6b' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang\\smarty\\templates\\admin\\layout.tpl',
      1 => 1485761903,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/head.tpl' => 1,
    'file:admin/content.tpl' => 1,
    'file:admin/footer.tpl' => 1,
  ),
),false)) {
function content_588eed72efe821_51194650 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:admin/content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
