<?php
/* Smarty version 3.1.30, created on 2017-01-28 05:54:21
  from "C:\wamp\www\QL_nha_hang\smarty\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588c320d7daa31_51917194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ffdb1598d27540fc5e824eacac8f60f2eaa6964' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang\\smarty\\templates\\header.tpl',
      1 => 1485582788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
    'file:slider.tpl' => 1,
  ),
),false)) {
function content_588c320d7daa31_51917194 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!--==============================header=================================-->
    <header>
    	<div class="row-top">
        	<div class="main">
            	<div class="wrapper">
                	<h1><a href=".">Catering<span>.com</span></a></h1>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32149588c320d7b77a2_56522407', "menu");
?>

                </div>
            </div>
        </div>
        <div class="row-bot">
        	<div class="row-bot-bg">
            	<div class="main">      
                	<h2><img src="public/layout/images/slogan.png" /></h2>          	
                	<!--<h2>Nghệ Thuật <span>Ẩm Thực Bốn Phương</span></h2>tìm hiểu thêm tại sao k hiện -->
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3754588c320d7d2d36_67790533', "slider");
?>

                </div>
            </div>
        </div>
    </header>
    <?php }
/* {block "menu"} */
class Block_32149588c320d7b77a2_56522407 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "menu"} */
/* {block "slider"} */
class Block_3754588c320d7d2d36_67790533 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "slider"} */
}
