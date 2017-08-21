<?php
/* Smarty version 3.1.30, created on 2017-02-19 09:30:01
  from "C:\xampp\htdocs\QL_nha_hang2\smarty\templates\admin\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a95789a71479_52839170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9753165d67ae152be92d52a21f2546f5dfa6b199' => 
    array (
      0 => 'C:\\xampp\\htdocs\\QL_nha_hang2\\smarty\\templates\\admin\\layout.tpl',
      1 => 1485761904,
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
function content_58a95789a71479_52839170 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:admin/content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
