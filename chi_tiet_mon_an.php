<?php
ini_set("display_errors",1);
include 'controllers/c_mon_an.php';
	$c_chi_tiet_mon_an= new C_mon_an;
	$c_chi_tiet_mon_an->hien_thi_chi_tiet_mon_an();
?>