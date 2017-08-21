<?php
include '../controllers/c_admin_tin_tuc.php';
$c_tin_tuc= new C_tin_tuc;
//echo dirname(__FILE__);  //cách lấy đường dẫn thư mục hiện tại 
$c_tin_tuc->sua_tin_tuc();

?>