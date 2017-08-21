<?php
/* Smarty version 3.1.30, created on 2017-02-19 09:29:23
  from "C:\xampp\htdocs\QL_nha_hang2\smarty\templates\mon_an\head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a957630a0bc6_36682487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87bab53b149cf0cd6ff6686d24773b4bb2d4b954' => 
    array (
      0 => 'C:\\xampp\\htdocs\\QL_nha_hang2\\smarty\\templates\\mon_an\\head.tpl',
      1 => 1485625730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a957630a0bc6_36682487 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <title><?php echo $_smarty_tpl->tpl_vars['tieude']->value;?>
</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="public/layout/css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="public/layout/css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="public/layout/css/layout.css" type="text/css" media="screen">
    <link rel="stylesheet" href="public/layout/css/prettyPhoto.css" type="text/css" media="screen">
    <?php echo '<script'; ?>
 src="public/layout/js/jquery-1.7.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 src="public/layout/js/ajax_cart.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/layout/js/ajax_xoa_cart.js" type="text/javascript"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 src="public/layout/js/cufon-yui.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/layout/js/cufon-replace.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/layout/js/Dynalight_400.font.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/layout/js/FF-cash.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/layout/js/jquery.prettyPhoto.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/layout/js/hover-image.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/layout/js/jquery.easing.1.3.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/layout/js/jquery.bxSlider.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$('#slider-2').bxSlider({
				pager: true,
				controls: false,
				moveSlideQty: 1,
				displaySlideQty: 4
			});
			$("a[data-gal^='prettyPhoto']").prettyPhoto({
				theme:'facebook'
				});
		}); 
	<?php echo '</script'; ?>
>
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
        	<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
	<![endif]-->
    <!--[if lt IE 9]>
   		<?php echo '<script'; ?>
 type="text/javascript" src="public/layout/js/html5.js"><?php echo '</script'; ?>
>
	<![endif]-->
    </head>
    <body id="page3"><?php }
}
