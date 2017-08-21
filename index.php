<?php
//chèn thư viện smarty
include 'controllers/smarty_nhahang.php';

//khai báo biến
$smarty= new Smarty_nha_hang;

$smarty->assign("tieude","Quản Lý Nhà Hàng");

$smarty->display("layout.tpl"); 

?>