<?php
/* Smarty version 3.1.30, created on 2017-02-19 09:30:01
  from "C:\xampp\htdocs\QL_nha_hang2\smarty\templates\admin\sidebar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a95789b21115_21779344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a59e0817b053168884576d8150e7692a975deb5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\QL_nha_hang2\\smarty\\templates\\admin\\sidebar.tpl',
      1 => 1486966170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a95789b21115_21779344 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-3 sidebar" style="line-height:0.8em">
<ul class="list-group" >
	<li class="list-group-item">
    	<div class="media">
        	<a class="pull-left">
            	<img class="media-object" src="images/dai-dien.jpg " alt="Ảnh đại diện" width="84" height="84">
            </a>
        	<div class="media-body">
            	 <h4 class="media-heading">aaaaa</h4>
                 <h4><span class="label label-primary">Quản trị viên</span></h4>
                   
            </div>
        </div>
    </li><!--li.list-group-item-->
    
    <a class="list-group-item active" href="quantri.php" style="font-weight:bold">
            <span class="glyphicon glyphicon-dashboard"></span> Danh Mục
    </a>
    <a class="list-group-item " href="#" style="background-color:#0F6; font-weight:bold">
            <span class="glyphicon glyphicon-tag"></span> Tin Tức
    </a>
    <ul style="list-style:none" >
        	<li ><a href="danh_sach_tin_tuc.php" title="tintuc"class="list-group-item">Danh Sách Tin Tức</a></li>
            <li ><a href="them_tin_tuc.php" title="tintuc"class="list-group-item">Thêm Tin Tức</a></li>
    </ul>
    
    
    <a class="list-group-item" href="loai_mon_an.php" style="background-color:#0F6; font-weight:bold">
            <span class="glyphicon glyphicon-edit"></span> Loại Món Ăn
    </a>  
    <ul style="list-style:none" >
        	<li ><a href="loai_mon_an.php" title="tintuc"class="list-group-item">Danh Sách Loại Món Ăn</a></li>
            <li ><a href="them_loai_mon_an.php" title="tintuc"class="list-group-item">Thêm Loại Món Ăn</a></li>
    </ul>
    
     <a class="list-group-item" href="#" style="background-color:#0F6; font-weight:bold">
            <span class="glyphicon glyphicon-edit"></span> Món Ăn
    </a>  
    <ul style="list-style:none" >
        	<li ><a href="mon_an.php" title="tintuc"class="list-group-item">Danh Sách Món Ăn</a></li>
            <li ><a href="them_mon_an.php" title="tintuc"class="list-group-item">Thêm Món Ăn</a></li>
    </ul>
    
     <a class="list-group-item" href="#" style="background-color:#0F6; font-weight:bold">
            <span class="glyphicon glyphicon-user"></span> User
    </a>  
    <ul style="list-style:none" >
        	<li ><a href="danh_sach_user.php" title="tintuc"class="list-group-item">Danh Sách User</a></li>
            <li ><a href="them_user.php" title="tintuc"class="list-group-item">Thêm User</a></li>
    </ul>
	 <a class="list-group-item" href="#" style="background-color:#0F6; font-weight:bold">
            <span class="glyphicon glyphicon-off"></span> Thoát
     </a>

<!--
    <?php echo '<?php
     ';?>// Phân quyền sidebar
        // Nếu tài khoản là admin
        if ($data_user['position'] == '1')
        {
            echo
            '
                <a class="list-group-item" href="' . $_DOMAIN . 'categories">
                    <span class="glyphicon glyphicon-tag"></span> Chuyên mục
                </a>
                <a class="list-group-item" href="' . $_DOMAIN . 'setting">
                    <span class="glyphicon glyphicon-cog"></span> Cài đặt chung
                </a>  
            ';
        }
 
    <?php echo '?>';?>
-->
       
        
</ul><!--ul.list-group-->	
</div><!--div.sidebar--><?php }
}
