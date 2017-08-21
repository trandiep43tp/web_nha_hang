<?php

include '../models/m_nguoi_dung.php';
include 'pager.php';
session_start();
class C_user
{
	public function hien_thi_user()
	{
		$msg=isset($_SESSION["msg"])?$_SESSION["msg"]:"";  //nếu tồn tại session msg 
		if(isset($_SESSION["msg"]))
		{
			
			unset($_SESSION["msg"]);
		}
		
		//models
		$m_user= new M_use;
		$users=$m_user->danh_sach_user();
		$p= new pager;
		$limit=3;   //số bản tin khi hiển thị
		$count=count($users);  //số bản tin
		$pages=$p->findPages($count,$limit);  //số trang
		$vt=$p->findStart($limit);   //vị trí của trang
		$curpage= $_GET["page"];   //trang hiện hành
		$lst=$p->pageList($curpage,$pages);
		$users=$m_user->danh_sach_user($vt,$limit);
		//hết phân trang
		//views
		include '../controllers/smarty_nhahang_quantri.php';
			$smarty= new smarty_nhahang_quantri;
			$smarty->assign("tieude","Danh Sách User");
			$smarty->assign("msg",$msg);
			$smarty->assign("users",$users);
			$smarty->assign("lst",$lst);
			$smarty->assign("view","../../../views/user/v_danh_sach_user.tpl");
			$smarty->display("admin/layout.tpl");
		
	}
	
	public function them_user()
	{
		//models		
		$m_user=new M_use;
			
		if(isset($_POST["cap_nhat"]))
		{
			
		}
		//view
		include '../controllers/smarty_nhahang_quantri.php';
			$smarty= new smarty_nhahang_quantri;
			$smarty->assign("tieude","Thêm User");			
			$smarty->assign("view","../../../views/user/v_them_user.tpl");
			$smarty->display("admin/layout.tpl");
	}
	
	public function sua_user()
	{
		
		//view
		include '../controllers/smarty_nhahang_quantri.php';
			$smarty= new smarty_nhahang_quantri;
			$smarty->assign("tieude","Sửa User");			
			$smarty->assign("view","../../../views/user/v_sua_user.tpl");
			$smarty->display("admin/layout.tpl");
	}
	
	public function xoa_user()
	{
		
	}
}
?>