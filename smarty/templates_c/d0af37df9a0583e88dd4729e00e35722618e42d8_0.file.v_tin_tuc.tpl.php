<?php
/* Smarty version 3.1.30, created on 2017-02-19 09:29:20
  from "C:\xampp\htdocs\QL_nha_hang2\views\tin_tuc\v_tin_tuc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a95760dc7722_31504438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0af37df9a0583e88dd4729e00e35722618e42d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\QL_nha_hang2\\views\\tin_tuc\\v_tin_tuc.tpl',
      1 => 1485697256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/tin_tuc/v_tin_tuc_left.tpl' => 1,
    'file:views/tin_tuc/v_tin_tuc_right.tpl' => 1,
  ),
),false)) {
function content_58a95760dc7722_31504438 (Smarty_Internal_Template $_smarty_tpl) {
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
