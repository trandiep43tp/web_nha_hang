<?php
session_start();  //mở session để lưu thông báo
include '../models/m_loai_mon_an.php';
include 'pager.php';
class C_loai_mon_an
{
	public function hien_thi_loai_mon_an()
	{
		$msg=isset($_SESSION["msg"])?$_SESSION["msg"]:"";  //nếu tồn tại session msg 
		if(isset($_SESSION["msg"]))
		{
			unset($_SESSION["msg"]);  //hủy session
		}
		//models
		$m_loai_mon_an= new M_loai_mon_an;
		$loai_mon_ans=$m_loai_mon_an->doc_loai_mon_an();
		//phân trang
		$p= new pager;
		$limit=5;				//số bản tin cho hiện trên 1 trang
		$count= count($loai_mon_ans);  //tổng số trang
		$vitri=$p->findStart($limit);		//vị trí đầu tiên của trang
		$pages=$p->findPages($count,$limit);  //tổng số trang
		$curpage=$_GET['page'];				//trang hiện hành	
		$lst=$p->pageList($curpage,$pages);		//dữ liệu hiển thị
		$loai_mon_ans=$m_loai_mon_an->doc_loai_mon_an($vitri,$limit);  //đọc lại dữ liệu liaoj món ăn
		//hết phân trang
		//view
		include '../controllers/smarty_nhahang_quantri.php';
			$smarty= new smarty_nhahang_quantri;
			$smarty->assign("tieude","Loại Món ăn");
			$smarty->assign("msg",$msg);
			$smarty->assign("loai_mon_ans",$loai_mon_ans);
			$smarty->assign("lst",$lst);
			$smarty->assign("view","../../../views/loai_mon_an/v_admin_loai_mon_an.tpl");
			$smarty->display("admin/layout.tpl");
	}
	
	public function them_loai_mon_an()
	{
		//model
		if(isset($_POST["cap_nhat"]))
		{			
			$ten_loai=$_POST["ten_loai"]; //post lấy theo name
			$mo_ta=$_POST["mo_ta"];
			$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:"";
			$m_loai_mon_an= new M_loai_mon_an;			
			$kq=$m_loai_mon_an->them_loai_mon_an($ten_loai,$mo_ta,$hinh);
			$st=$ten_loai."   ".$mo_ta."  ".$hinh;
			//echo $st;
			if($kq) //cập nhật thành công
			{
				$_SESSION["msg"]="Thêm loại món ăn thành công";
				//di chuyển hình về thư mục để lưu
				if($hinh!="")
				{
					move_uploaded_file($_FILES["hinh"]["tmp_name"],"../public/images/hinh_loai_mon_an/$hinh");
					$_SESSION["msg"].= " và lưu hình thành công.";
				}
							
			}
			else
			{
				$_SESSION["msg"]="Thêm loại món ăn bị lỗi";
			}
			//chuyển về trang danh sách loại_mon_an
			header("location:loai_mon_an.php");
		}
		//view
		include '../controllers/smarty_nhahang_quantri.php';
			$smarty= new smarty_nhahang_quantri;
			$smarty->assign("tieude","Loại Món ăn");
			$smarty->assign("view","../../../views/loai_mon_an/v_admin_them_loai_mon_an.tpl");
			$smarty->display("admin/layout.tpl");
		
	}
	
//admin sửa loại món ăn
	public function sua_loai_mon_an()
	{
		//model
		if(isset($_GET["ma_loai"]))
		{
			$ma_loai=$_GET["ma_loai"]; 
			//echo $ma_loai;
			
			//lấy dữ liệu để hiển thị lên view
			$m_loai_mon_an = new M_loai_mon_an;
			$loai_mon=$m_loai_mon_an->doc_loai_mon_an_theo_ma_loai($ma_loai);
			//var_dump($loai_mon);
			if(isset($_POST["cap_nhat"]))
			{				
				$ten_loai=$_POST["ten_loai"];
				$mo_ta=$_POST["mo_ta"];
				$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:$loai_mon->hinh;
				$param=array($ma_loai,$ten_loai,$mo_ta,$hinh);
				var_dump($param);
				
				$kq=$m_loai_mon_an->sua_loai_mon_an($ma_loai,$ten_loai,$mo_ta,$hinh);
				if($kq)
				{
					$_SESSION["msg"]="Sửa loại món ăn thành công";
					if($_FILES["hinh"]["error"]==0)
					{
						move_uploaded_file($_FILES["hinh"]["tmp_name"],"../public/images/hinh_loai_mon_an/$hinh");
						$_SESSION["msg"].=" và lưu hình thành công";
					}
					
				}
				else
				{
					$_SESSION["msg"]="Sửa loại món ăn bị lỗi";
				}
				//chuyển về trang danh sách loai món ăn
				header("location:loai_mon_an.php");
			}
			
		}
		//view
		include '../controllers/smarty_nhahang_quantri.php';
			$smarty= new smarty_nhahang_quantri;
			$smarty->assign("tieude","Sửa Loại Món ăn");
			//$smarty->assign("loai_mon",$loai_mon);   //gửi dữ liệu qua
			$smarty->assign("loai",$loai_mon);
			$smarty->assign("view","../../../views/loai_mon_an/v_admin_sua_loai_mon_an.tpl");
			$smarty->display("admin/layout.tpl");
		
	}
	
	public function xoa_loai_mon_an()
	{
		//model
		if(isset($_GET["ma_loai"]))
		{
			$ma_loai=$_GET["ma_loai"];
			//echo $ma_loai;			
			$m_loai_mon_an= new M_loai_mon_an;
			$kq=$m_loai_mon_an->xoa_loai_mon_an($ma_loai);
			if($kq)
			{
				$_SESSION["msg"]="Xóa loại món ăn thành công";				
			}
			else
			{
				$_SESSION["msg"]="Xóa loại món ăn bị lỗi";
			}
			//chuyển về trang danh sách loai món ăn
			header("location:loai_mon_an.php");
			
		}
		
	}
	
}


?>