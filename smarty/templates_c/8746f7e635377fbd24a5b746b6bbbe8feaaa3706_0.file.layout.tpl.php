<?php
/* Smarty version 3.1.30, created on 2017-02-03 16:22:57
  from "C:\wamp\www\QL_nha_hang2\smarty\templates\mon_an\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5894ae614202e6_47811057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8746f7e635377fbd24a5b746b6bbbe8feaaa3706' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang2\\smarty\\templates\\mon_an\\layout.tpl',
      1 => 1485624082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:thuc_don/layout.tpl' => 1,
    'file:mon_an/head.tpl' => 1,
  ),
),false)) {
function content_5894ae614202e6_47811057 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185325894ae61414768_64411901', "head");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:thuc_don/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "head"} */
class Block_185325894ae61414768_64411901 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:mon_an/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "head"} */
}
