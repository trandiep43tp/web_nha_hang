<?php
/* Smarty version 3.1.30, created on 2017-02-03 15:12:47
  from "C:\wamp\www\QL_nha_hang2\smarty\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58949defdae6c5_98436591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1390f68b472b4791438354b4e7b658c76f8b682' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang2\\smarty\\templates\\header.tpl',
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
function content_58949defdae6c5_98436591 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1940458949defd73d30_30895105', "menu");
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_770158949defda2b47_88048434', "slider");
?>

                </div>
            </div>
        </div>
    </header>
    <?php }
/* {block "menu"} */
class Block_1940458949defd73d30_30895105 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "menu"} */
/* {block "slider"} */
class Block_770158949defda2b47_88048434 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "slider"} */
}
