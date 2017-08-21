<?php
/* Smarty version 3.1.30, created on 2017-02-01 07:51:37
  from "C:\wamp\www\QL_nha_hang1\smarty\templates\admin\content_right.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589193898daff9_29907214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69ced8796072a4fa9abc6b1a94c61751af094d7a' => 
    array (
      0 => 'C:\\wamp\\www\\QL_nha_hang1\\smarty\\templates\\admin\\content_right.tpl',
      1 => 1485882822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589193898daff9_29907214 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\wamp\\www\\QL_nha_hang1\\smarty\\libs\\plugins\\modifier.date_format.php';
?>

<div class="col-md-9 content">
	<h3><span class="label label-success ">Quản Trị Nhà Hàng</span></h3>
    <p>Ngày Cập Nhật:<strong style="color:red"> <?php echo smarty_modifier_date_format(time(),"%A, %B %e, %Y");?>
</strong></p>
    
    
    <div class="row" style="margin-top:25px; margin-left:15px; text-align:justify " >
    <a href="mon_an.php"><button class="btn btn-primary" style="width:120px; height:60px; margin-right:10px" >Món Ăn</button></a>
    <a href="loai_mon_an.php"><button class="btn btn-primary" style="width:120px; height:60px;margin-right:10px" >Loại Món</button></a>
    <a href="#"><button class="btn btn-primary" style="width:120px; height:60px;margin-right:10px" >Tin Tức</button></a>
    <a href="#"><button class="btn btn-primary" style="width:120px; height:60px;margin-right:10px" >Hóa Đơn</button></a>
    <a href="#"><button class="btn btn-primary" style="width:120px; height:60px;margin-right:10px" >User</button></a>
    
    </div>
	<div style="border-top:#09F solid 1px; margin:15px">
		<?php if (isset($_smarty_tpl->tpl_vars['view']->value)) {?>
         <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['view']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        <?php }?>
	</div>

    <div style="border-top:#0CF solid 1px; margin-top:200px">
   		 Copy right 
    </div>
    

</div>


<?php }
}
