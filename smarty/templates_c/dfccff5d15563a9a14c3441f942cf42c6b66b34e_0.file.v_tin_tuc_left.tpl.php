<?php
/* Smarty version 3.1.30, created on 2017-02-19 09:29:20
  from "C:\xampp\htdocs\QL_nha_hang2\views\tin_tuc\v_tin_tuc_left.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a95760ddee27_64196135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfccff5d15563a9a14c3441f942cf42c6b66b34e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\QL_nha_hang2\\views\\tin_tuc\\v_tin_tuc_left.tpl',
      1 => 1486310408,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a95760ddee27_64196135 (Smarty_Internal_Template $_smarty_tpl) {
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
