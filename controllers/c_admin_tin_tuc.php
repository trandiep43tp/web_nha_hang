<?php
session_start();
include '../models/m_tin_tuc.php';
include 'pager.php';
class C_tin_tuc 
{
	
	public function danh_sach_tin_tuc()
	{
		$msg=isset($_SESSION["msg"])?$_SESSION["msg"]:"";  //nếu tồn tại session msg 
		if(isset($_SESSION["msg"]))
		{
			unset($_SESSION["msg"]);  //hủy session
		}
		//model
		$m_tin_tuc=new M_tin_tuc;
		$tin_tucs=$m_tin_tuc->doc_tin_tuc();
		//phân trang
		$p=new pager;
		$limit=3;   					//số mẩu tin trên 1 trang
		$count=count($tin_tucs);		//tổng số mảu tin
		$vitri=$p->findStart($limit);	//vị trí đầu tiên của trang
		$pages=$p->findPages($count,$limit); //số trang
		$curpage=$_GET["page"];  //trang hiện hành
		$lst=$p->pageList($curpage,$pages);
		$tin_tucs=$m_tin_tuc->doc_tin_tuc($vitri,$limit);
		
		//hết phân trang
		//view
		include '../controllers/smarty_nhahang_quantri.php';
			$smarty= new smarty_nhahang_quantri;
			$smarty->assign("tieude","Danh Sách Tin Tức");
			$smarty->assign("tin_tucs",$tin_tucs);
			$smarty->assign("lst",$lst);
			$smarty->assign("msg",$msg);
			$smarty->assign("view","../../../views/tin_tuc/v_admin_tin_tuc.tpl");
			$smarty->display("admin/layout.tpl");
		
	}
	
	public function them_tin_tuc()
	{
		//models
		if(isset($_POST["cap_nhat"]))
		{
			//lấy dữ liệu
			$ma_tin_tuc=null;
			$tieu_de=$_POST["tieu_de"];
			$tom_tat=$_POST["noi_dung_tom_tat"];
			$chi_tiet=$_POST["noi_dung_chi_tiet"];
			$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:"";
			$tac_gia=$_POST["tac_gia"];
			$ngay_dang=$_POST["ngay_dang"];
			$ngay_gui=$_POST["ngay_gui"];
			$so_luot_xem=$_POST["so_luot_xem"];
			$param=array($ma_tin_tuc,$tieu_de,$tom_tat,$chi_tiet,$hinh,$tac_gia,$ngay_dang,$ngay_gui,$so_luot_xem);
			//var_dump($param);
			$m_tin_tuc=new M_tin_tuc;
			$kq=$m_tin_tuc->them_tin_tuc($tieu_de,$tom_tat,$chi_tiet,$hinh,$tac_gia,$ngay_dang,$ngay_gui,$so_luot_xem);
			if($kq)
			{
				$_SESSION["msg"]="Thêm Tin Tức Thành Công";
				//di chuyển hình
				if($hinh!="")
				{
					$kt=move_uploaded_file($_FILES["hinh"]["tmp_name"],"../public/images/tin_tuc/$hinh");
					if($kt)
					{
						$_SESSION["msg"].=" và di chuyển hình thành công";
					}
					else
					{
						$_SESSION["msg"].=" và di chuyển hình thất bại";
					}
				}
			}
			else
			{
				$_SESSION["msg"]="Thêm Tin Tức Thất bại";
			}
			header("location:danh_sach_tin_tuc.php");
		}
		//view
		include '../controllers/smarty_nhahang_quantri.php';
			$smarty= new smarty_nhahang_quantri;
			$smarty->assign("tieude","Thêm Tin Tức");			
			$smarty->assign("view","../../../views/tin_tuc/v_admin_them_tin_tuc.tpl");
			$smarty->display("admin/layout.tpl");
	}
	
	public function sua_tin_tuc()
	{
		//models
		if(isset($_GET["ma_tin_tuc"]))
		{
			$ma_tin_tuc=$_GET["ma_tin_tuc"];
			$m_tin_tuc= new M_tin_tuc;
			$tin_tuc=$m_tin_tuc->doc_tin_tuc_theo_ma_tin_tuc($ma_tin_tuc);
		}
		//lấy dữ liệu đẫ chỉnh sửa để lưu
		if(isset($_POST["cap_nhat"]))
		{
			//lấy dữ liệu			
			$tieu_de=$_POST["tieu_de"];
			$tom_tat=$_POST["noi_dung_tom_tat"];
			$chi_tiet=$_POST["noi_dung_chi_tiet"];
			$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:$tin_tuc->hinh;
			$tac_gia=$_POST["tac_gia"];
			$ngay_dang=$_POST["ngay_dang"];
			$ngay_gui=$_POST["ngay_gui"];
			$so_luot_xem=$_POST["so_luot_xem"];
			$param=array($ma_tin_tuc,$tieu_de,$tom_tat,$chi_tiet,$hinh,$tac_gia,$ngay_dang,$ngay_gui,$so_luot_xem);
			//var_dump($param);
			$m_tin_tuc=new M_tin_tuc;
			$kq=$m_tin_tuc->sua_tin_tuc($ma_tin_tuc,$tieu_de,$tom_tat,$chi_tiet,$hinh,$tac_gia,$ngay_dang,$ngay_gui,$so_luot_xem);
			if($kq)
			{
				$_SESSION["msg"]="Sửa Tin Tức Thành Công";
				//di chuyển hình
				if($_FILES["hinh"]["error"]==0)
				{
					$kt=move_uploaded_file($_FILES["hinh"]["tmp_name"],"../public/images/tin_tuc/$hinh");
					if($kt)
					{
						$_SESSION["msg"].=" và di chuyển hình thành công";
					}
					else
					{
						$_SESSION["msg"].=" và di chuyển hình thất bại";
					}
				}
			}
			else
			{
				$_SESSION["msg"]="Thêm Tin Tức Thất bại";
			}
			header("location:danh_sach_tin_tuc.php");
		}
		//view
		include '../controllers/smarty_nhahang_quantri.php';
			$smarty= new smarty_nhahang_quantri;
			$smarty->assign("tieude","Sửa Tin Tức");		
			$smarty->assign("tin_tuc",$tin_tuc);	
			$smarty->assign("view","../../../views/tin_tuc/v_admin_sua_tin_tuc.tpl");
			$smarty->display("admin/layout.tpl");
	}
	
	public function xoa_tin_tuc()
	{
		//models
		if(isset($_GET["ma_tin_tuc"]))
		{
			$ma_tin_tuc=$_GET["ma_tin_tuc"];
			//echo $ma_tin_tuc;
			$m_tin_tuc=new M_tin_tuc;
			$kq=$m_tin_tuc->xoa_tin_tuc($ma_tin_tuc);
			if($kq)
			{
				$_SESSION["msg"]="Xóa Tin Tức Thành Công";
			}
			else
			{
				$_SESSION["msg"]="Xóa Tin Tức Thất bại";
			}
			header("location:danh_sach_tin_tuc.php");
		}
	}
}

?>