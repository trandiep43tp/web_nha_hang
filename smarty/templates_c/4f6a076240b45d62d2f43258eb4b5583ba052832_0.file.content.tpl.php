<?php
/* Smarty version 3.1.30, created on 2017-01-25 15:07:48
  from "C:\wamp\www\QL_nha_hang\smarty\templates\mon_an\content.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5888bf44e49769_49231228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f6a076240b45d62d2f43258eb4b5583ba052832' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang\\smarty\\templates\\mon_an\\content.tpl',
      1 => 1485356549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:mon_an/content_banner.tpl' => 1,
    'file:mon_an/content_left1.tpl' => 1,
    'file:mon_an/content_right1.tpl' => 1,
  ),
),false)) {
function content_5888bf44e49769_49231228 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:mon_an/content_banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div style="width:1300px">
<?php $_smarty_tpl->_subTemplateRender("file:mon_an/content_left1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:mon_an/content_right1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>			
	<?php }
}
