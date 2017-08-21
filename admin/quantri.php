<?php
include '../controllers/smarty_nhahang_quantri.php';
$smarty= new smarty_nhahang_quantri;

$smarty->assign("tieude","Quản Trị Nhà Hàng");

$smarty->display("admin/layout.tpl");
?>