<?php
/* Smarty version 3.1.30, created on 2017-02-05 16:00:10
  from "C:\wamp\www\QL_nha_hang2\views\tin_tuc\v_tin_tuc_left.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58974c0a37df82_08476873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b534f8d95f90dd5e3f3afb88f1e7c02decb9f78' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang2\\views\\tin_tuc\\v_tin_tuc_left.tpl',
      1 => 1486310406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58974c0a37df82_08476873 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="img-indent-bot">
      <h3 class="prev-indent-bot"><?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->tieu_de;?>
</h3>
      <div class="wrapper img-indent-bot" align="justify">
            <h5><?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->tom_tat;?>
  </h5>    
            <img src="public/images/tin_tuc/<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->hinh;?>
" alt="" width="210px" height="135px" style="float:left; margin-right:5px; margin-top:10px">
            <?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->chi_tiet;?>
 
			<h4><?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->tac_gia;?>
</h4>            
      </div>
</div>
         <?php }
}
