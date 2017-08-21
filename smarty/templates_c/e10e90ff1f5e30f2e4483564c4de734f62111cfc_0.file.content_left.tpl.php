<?php
/* Smarty version 3.1.30, created on 2017-01-30 16:33:52
  from "C:\wamp\www\QL_nha_hang\smarty\templates\admin\content_left.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588f6af03fbe37_70014507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e10e90ff1f5e30f2e4483564c4de734f62111cfc' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang\\smarty\\templates\\admin\\content_left.tpl',
      1 => 1485794029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_588f6af03fbe37_70014507 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
$(document).ready(function(e) {
    var pgurl=window.location.href.substr(window.location.href.lastIndexOf("/")+1);
	var id=null;
	if(pgurl=="") pgurl=".";
	$("#main-nav li a").each(function() {
        if($(this).attr("href")==pgurl||$(this).attr("href")=='')
		{
			var title=$(this).attr("title");
			id=document.getElementById(title);
			$(this).addClass("current");
			$(id).addClass("current");
		}
    });
	$(id).click();
});

<?php echo '</script'; ?>
>



<ul id="main-nav" >
	<li>
    	<a href="quantri.php" class="nav-top-item" >
        	Danh Mục
        </a>
    </li>
    <li>
    	<a href="#" class="nav-top-item" id="tintuc">Tin Tức</a>
        <ul>
        	<li><a href="#" title="tintuc">Danh Sách Tin Tức</a></li>
            <li><a href="#" title="tintuc">Thêm Tin Tức</a></li>
        </ul>
    </li>
    
    <li>
    	<a href="#" class="nav-top-item" id="loaimon">Loại Món Ăn</a>
        <ul>
        	<li><a href="#" title="loaimon">Danh Sách Loại Món Ăn</a></li>
            <li><a href="#" title="loaimon">Thêm Loại Món Ăn</a></li>
        </ul>
    </li>
    
    <li>
    	<a href="#" class="nav-top-item" id="monan">Món Ăn</a>
        <ul>
        	<li><a href="#" title="monan">Danh Sách Món Ăn</a></li>
            <li><a href="#" title="monan">Thêm Món Ăn</a></li>
        </ul>
    </li>
    
     <li>
    	<a href="#" class="nav-top-item" id="user">User</a>
        <ul>
        	<li><a href="#" title="user">Danh Sách User</a></li>
            <li><a href="#" title="user">Thêm user</a></li>
        </ul>
    </li>

</ul>

<style type="text/css">
#quantri{
	background-color:#0CF;
}
#main-nav{
	width:200px;
	float:left;
	text-align:right;
	font-weight:bold;
	line-height:2.3em;
}
#main_nav ul li{
	margin:15px;
	
}
.nav-top-item{
	background:#80FF00;
	height:25px;
}

</style><?php }
}
