<?php
/* Smarty version 3.1.30, created on 2017-01-24 08:41:16
  from "C:\wamp\www\QL_nha_hang\smarty\templates\mon_an\layout_sp.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5887132c09cbe8_96027037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f8524c247c587f8ac39137010c5c8c6871899c9' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang\\smarty\\templates\\mon_an\\layout_sp.tpl',
      1 => 1485246657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
    'file:mon_an/content.tpl' => 1,
  ),
),false)) {
function content_5887132c09cbe8_96027037 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
   
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125795887132c062252_72261571', "banner");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179525887132c091061_74896106', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "banner"} */
class Block_125795887132c062252_72261571 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "banner"} */
/* {block "content"} */
class Block_179525887132c091061_74896106 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:mon_an/content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "content"} */
}
