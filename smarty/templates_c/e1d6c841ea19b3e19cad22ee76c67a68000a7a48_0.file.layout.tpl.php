<?php
/* Smarty version 3.1.30, created on 2017-02-01 08:27:45
  from "C:\wamp\www\QL_nha_hang1\smarty\templates\thuc_don\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58919c016861e6_48747699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1d6c841ea19b3e19cad22ee76c67a68000a7a48' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang1\\smarty\\templates\\thuc_don\\layout.tpl',
      1 => 1485591607,
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
function content_58919c016861e6_48747699 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1115158919c01624741_50230936', "head");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1999658919c0165f0d8_82883962', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3126958919c0167e4d7_93398811', "slider");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "head"} */
class Block_1115158919c01624741_50230936 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:thuc_don/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_1999658919c0165f0d8_82883962 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:thuc_don/content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "content"} */
/* {block "slider"} */
class Block_3126958919c0167e4d7_93398811 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "slider"} */
}
