<?php
/* Smarty version 3.1.30, created on 2017-02-01 08:27:52
  from "C:\wamp\www\QL_nha_hang1\views\tin_tuc\v_tin_tuc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58919c08c3cb35_18050459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd99ae0bad02c21d07ef5ca7df171152338290791' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang1\\views\\tin_tuc\\v_tin_tuc.tpl',
      1 => 1485697255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/tin_tuc/v_tin_tuc_left.tpl' => 1,
    'file:views/tin_tuc/v_tin_tuc_right.tpl' => 1,
  ),
),false)) {
function content_58919c08c3cb35_18050459 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="main">
    <div class="wrapper">
    	 <article class="col-1">
          <div class="indent-left">
            <?php $_smarty_tpl->_subTemplateRender("file:views/tin_tuc/v_tin_tuc_left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    
          </div>
        </article>
        <article class="col-2">
             <?php $_smarty_tpl->_subTemplateRender("file:views/tin_tuc/v_tin_tuc_right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            
       </article>
        
    </div>
</div><?php }
}
