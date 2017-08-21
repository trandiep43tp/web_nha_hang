<?php
/* Smarty version 3.1.30, created on 2017-02-03 15:12:53
  from "C:\wamp\www\QL_nha_hang2\smarty\templates\thuc_don\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58949df5147cd1_91490897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b6658553cc0b06c05b02415fb172e6ac32d4694' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang2\\smarty\\templates\\thuc_don\\layout.tpl',
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
function content_58949df5147cd1_91490897 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2320558949df5115042_17286661', "head");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_370658949df51305c3_89043714', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157958949df5143e57_71709492', "slider");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "head"} */
class Block_2320558949df5115042_17286661 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:thuc_don/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_370658949df51305c3_89043714 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:thuc_don/content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "content"} */
/* {block "slider"} */
class Block_157958949df5143e57_71709492 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "slider"} */
}
