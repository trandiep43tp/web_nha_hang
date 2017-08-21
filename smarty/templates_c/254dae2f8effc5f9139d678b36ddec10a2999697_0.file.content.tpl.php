<?php
/* Smarty version 3.1.30, created on 2017-01-20 16:08:20
  from "C:\wamp\www\hoc_smarty\smarty\templates\content.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588235f4590588_13945100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '254dae2f8effc5f9139d678b36ddec10a2999697' => 
    array (
      0 => 'C:\\wamp\\www\\hoc_smarty\\smarty\\templates\\content.tpl',
      1 => 1484928478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:content_top.tpl' => 1,
    'file:content_nd.tpl' => 1,
    'file:content_menu.tpl' => 1,
  ),
),false)) {
function content_588235f4590588_13945100 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:content_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:content_nd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
             
<?php $_smarty_tpl->_subTemplateRender("file:content_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<?php }
}
