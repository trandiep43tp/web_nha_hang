<?php
/* Smarty version 3.1.30, created on 2017-01-24 08:20:55
  from "C:\wamp\www\QL_nha_hang\smarty\templates\products\layout_sp.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58870e674db619_78066761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '081a9b164800650593582ea7d3591370c8352cf7' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang\\smarty\\templates\\products\\layout_sp.tpl',
      1 => 1485244854,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
    'file:products/content_sp1.tpl' => 1,
  ),
),false)) {
function content_58870e674db619_78066761 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
   
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13258870e6749ce07_13889010', "banner");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_830158870e674cfa91_11180632', "content");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "banner"} */
class Block_13258870e6749ce07_13889010 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "banner"} */
/* {block "content"} */
class Block_830158870e674cfa91_11180632 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:products/content_sp1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "content"} */
}
