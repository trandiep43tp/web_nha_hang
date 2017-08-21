<?php
/* Smarty version 3.1.30, created on 2017-01-23 07:06:04
  from "C:\wamp\www\hoc_smarty\smarty\templates\products\layout_sp.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5885ab5c445628_07070496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fb488e9687499de867f4eac713a1696b620f70a' => 
    array (
      0 => 'C:\\wamp\\www\\hoc_smarty\\smarty\\templates\\products\\layout_sp.tpl',
      1 => 1485155158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
    'file:products/content_sp1.tpl' => 1,
  ),
),false)) {
function content_5885ab5c445628_07070496 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
   
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1815885ab5c42a0a2_38156939', "banner");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90345885ab5c43d921_76715315', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "banner"} */
class Block_1815885ab5c42a0a2_38156939 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "banner"} */
/* {block "content"} */
class Block_90345885ab5c43d921_76715315 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:products/content_sp1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "content"} */
}
