<?php
/* Smarty version 3.1.30, created on 2017-01-24 08:28:42
  from "C:\wamp\www\QL_nha_hang\smarty\templates\mon_an\content_sp1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5887103a65cfd1_29083909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a45401b74108fb63c14d1412faa49d298d6ea78f' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang\\smarty\\templates\\mon_an\\content_sp1.tpl',
      1 => 1485246442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5887103a65cfd1_29083909 (Smarty_Internal_Template $_smarty_tpl) {
?>
	<div id="body">
			<div class="header">
				<div>
					<h1>Products</h1>
				</div>
			</div>
			<div>				
				
				<ul>
					<li>
						<h1>Fruit Blast</h1>
						<p>This website template has been designed by freewebsitetemplates.com for you, for free.</p>
					</li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['monan']->value, 'mon');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mon']->value) {
?>
					<li>
						<img src="images/hinh_mon_an/<?php echo $_smarty_tpl->tpl_vars['mon']->value->hinh;?>
" alt="" width="150px" height="200px">
						<h2><?php echo $_smarty_tpl->tpl_vars['mon']->value->ten_mon;?>
</h2>
					</li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    <!--
					<li>
						<img src="layout/images/green-apple.jpg" alt="">
						<h2>Green Apple</h2>
					</li>
					<li>
						<img src="layout/images/pineapple.jpg" alt="">
						<h2>Pineapple</h2>
					</li>
                    -->
				</ul>
                <ul>
					<li>
						<h1>Berry Special</h1>
						<p>This website template has been designed by freewebsitetemplates.com for you, for free.</p>
					</li>
					<li>
						<img src="layout/images/blackberry.jpg" alt="">
						<h2>blackberry</h2>
					</li>
					<li>
						<img src="layout/images/strawberry.jpg" alt="">
						<h2>Strawberry</h2>
					</li>
					<li>
						<img src="layout/images/blueberry.jpg" alt="">
						<h2>BLUEBERRY</h2>
					</li>
				</ul>
			</div>
	</div><!--/div.body---><?php }
}
