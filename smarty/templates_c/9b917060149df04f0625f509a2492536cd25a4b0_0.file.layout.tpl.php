<?php
/* Smarty version 3.1.30, created on 2017-02-19 09:29:20
  from "C:\xampp\htdocs\QL_nha_hang2\smarty\templates\thuc_don\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a95760d79512_27422049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b917060149df04f0625f509a2492536cd25a4b0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\QL_nha_hang2\\smarty\\templates\\thuc_don\\layout.tpl',
      1 => 1485591608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
    'file:thuc_don/head.tpl' => 1,
    'file:thuc_don/content.tpl' => 1,
  ),
),false)) {
function content_58a95760d79512_27422049 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2207958a95760d6d999_29091472', "head");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_692458a95760d75692_45251760', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2363758a95760d79511_54156913', "slider");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "head"} */
class Block_2207958a95760d6d999_29091472 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:thuc_don/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_692458a95760d75692_45251760 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:thuc_don/content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "content"} */
/* {block "slider"} */
class Block_2363758a95760d79511_54156913 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "slider"} */
}
