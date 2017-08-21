<?php
/* Smarty version 3.1.30, created on 2017-01-28 17:21:30
  from "C:\wamp\www\QL_nha_hang\smarty\templates\mon_an\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588cd31a0e38c0_95616426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '870d5518848903f16bb495dfe7c39018d55a47cc' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang\\smarty\\templates\\mon_an\\layout.tpl',
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
function content_588cd31a0e38c0_95616426 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10762588cd31a0dbbc3_90259292', "head");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:thuc_don/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "head"} */
class Block_10762588cd31a0dbbc3_90259292 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:mon_an/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "head"} */
}
