<?php
/* Smarty version 3.1.30, created on 2017-01-28 08:20:10
  from "C:\wamp\www\QL_nha_hang\smarty\templates\thuc_don\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588c543a8969b5_13681995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dabd7b004e60ba3403a622d91a81087e2caea82c' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang\\smarty\\templates\\thuc_don\\layout.tpl',
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
function content_588c543a8969b5_13681995 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24705588c543a86f8a1_26437755', "head");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5414588c543a883134_06487986', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17767588c543a892b39_28931013', "slider");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "head"} */
class Block_24705588c543a86f8a1_26437755 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:thuc_don/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_5414588c543a883134_06487986 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:thuc_don/content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "content"} */
/* {block "slider"} */
class Block_17767588c543a892b39_28931013 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "slider"} */
}
