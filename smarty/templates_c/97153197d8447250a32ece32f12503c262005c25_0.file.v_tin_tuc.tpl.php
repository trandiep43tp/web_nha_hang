<?php
/* Smarty version 3.1.30, created on 2017-01-29 13:41:02
  from "C:\wamp\www\QL_nha_hang\views\tin_tuc\v_tin_tuc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588df0eeb3b2e7_81004717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97153197d8447250a32ece32f12503c262005c25' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang\\views\\tin_tuc\\v_tin_tuc.tpl',
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
function content_588df0eeb3b2e7_81004717 (Smarty_Internal_Template $_smarty_tpl) {
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
