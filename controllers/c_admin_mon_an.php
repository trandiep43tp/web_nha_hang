<?php
//không thể viết cùng trong c_mon_an.php được do khai báo include models đầu trang khác nhau đường dẫn.Muốn làm cùng 1 trang thì trong mỗi public lại khai báo 1 include models riêng thì sẽ chạy được
include '../models/m_mon_an.php';
include '../models/m_loai_mon_an.php';
include 'pager.php';
session_start();
class C_mon_an
{
	public function hien_thi_mon_an()
	{
		$msg=isset($_SESSION["msg"])?$_SESSION["msg"]:"";  //nếu tồn tại session msg 
		if(isset($_SESSION["msg"]))
		{
			
			unset($_SESSION["msg"]);
		}
		
		//models
		$m_mon_an = new M_mon_an;
		$mon_ans=$m_mon_an->doc_mon_an();
		//echo count($mon_ans);
		//phân trang
		$p= new pager;
		$limit=7;   //số bản tin khi hiển thị
		$count=count($mon_ans);  //số bản tin
		$pages=$p->findPages($count,$limit);  //số trang
		$vt=$p->findStart($limit);   //vị trí của trang
		$curpage= $_GET["page"];   //trang hiện hành
		$lst=$p->pageList($curpage,$pages);
		$mon_ans=$m_mon_an->doc_mon_an($vt,$limit);
		//hết phân trang
		//views
		include '../controllers/smarty_nhahang_quantri.php';
			$smarty= new smarty_nhahang_quantri;
			$smarty->assign("tieude","Món ăn");
			$smarty->assign("msg",$msg);
			$smarty->assign("mon_ans",$mon_ans);
			$smarty->assign("lst",$lst);
			$smarty->assign("view","../../../views/mon_an/v_admin_mon_an.tpl");
			$smarty->display("admin/layout.tpl");
		
	}
	
	public function them_mon_an()
	{
		//models		
		$m_loai_mon_an= new M_loai_mon_an;
			//lấy loại món
			$loai_mon_ans=$m_loai_mon_an->doc_loai_mon_an();
		$m_mon_an = new M_mon_an;
		//`ma_mon`, `ma_loai`, `ten_mon`, `noi_dung_tom_tat`, `noi_dung_chi_tiet`, `don_gia`, `don_gia_khuyen_mai`, `khuyen_mai`, `hinh`, `ngay_cap_nhat`, `dvt`, `trong_ngay`
		if(isset($_POST["cap_nhat"]))
		{
			//khai báo các biến
			$ma_mon=null;
			$ma_loai=$_POST["ma_loai"];
			$ten_mon=$_POST["ten_mon"];
			$noi_dung_tom_tat=$_POST["noi_dung_tom_tat"];
			$noi_dung_chi_tiet=$_POST["noi_dung_chi_tiet"];
			$don_gia=$_POST["don_gia"];
			$don_gia_khuyen_mai=$_POST["don_gia_khuyen_mai"];
			$khuyen_mai=$_POST["khuyen_mai"];
			//$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:"";	
			$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:"";		
			$ngay_cap_nhat=$_POST["ngay_cap_nhat"];
			$dvt=$_POST["dvt"];
			//$trong_ngay=$_POST["trong_ngay"];
			//Khi checkbox không được lựa chọn đồng nghĩa giá trị của checkbox không được truyền lên server. Vì vậy trong quá trình lấy dữ liệu nên kèm theo câu lệnh isset() để kiểm tra.
			if(isset($_POST["trong_ngay"])&&$_POST["trong_ngay"]=="on")
			{
				$trong_ngay=1;
			}
			else
			{
				$trong_ngay=0;
			}
			$param=array($ma_mon,$ma_loai,$ten_mon,$noi_dung_tom_tat,$noi_dung_chi_tiet,$don_gia,$don_gia_khuyen_mai,$khuyen_mai,$hinh,$ngay_cap_nhat,$dvt,$trong_ngay);			
			//var_dump($param);			
			$kq=$m_mon_an->them_mon_an($ma_loai,$ten_mon,$noi_dung_tom_tat,$noi_dung_chi_tiet,$don_gia,$don_gia_khuyen_mai,$khuyen_mai,$hinh,$ngay_cap_nhat,$dvt,$trong_ngay);
			//$kq=$m_loai_mon_an->them_loai_mon_an($ten_mon,$noi_dung_tom_tat,$hinh);
			if($kq)
			{
				$_SESSION["msg"]="Lưu dữ liệu thành công";
				//di chuyển hình
				if($hinh!="")
				{
					move_uploaded_file($_FILES["hinh"]["tmp_name"],"../public/images/hinh_mon_an/$hinh");
					$_SESSION["msg"].=" và lưu hình thành công";
				}
				
			}
			else
			{
				$_SESSION["msg"]="Lưu dữ liệu thất bại";
			}
			//di chuyển về trang danh sách món ăn
			header("location:mon_an.php");
		}
			
		//view
		include '../controllers/smarty_nhahang_quantri.php';
			$smarty= new smarty_nhahang_quantri;
			$smarty->assign("tieude","Món ăn");
			$smarty->assign("loai_mons",$loai_mon_ans);
			$smarty->assign("view","../../../views/mon_an/v_admin_them_mon_an.tpl");
			$smarty->display("admin/layout.tpl");
	}
	
	public function sua_mon_an()
	{
		//models
		if(isset($_GET["ma_mon"]))
		{
			//lấy dữ liệu để hiển thị
			$ma_mon=$_GET["ma_mon"];
			$m_mon_an= new M_mon_an;
			$mon_an=$m_mon_an->doc_chi_tiet_mon_an($ma_mon);
			//lấy tên loại món ăn
			$ma_loai_mon_an=$mon_an->ma_loai;
			$m_loai_mon_an= new M_loai_mon_an;
			$loai_mon_an=$m_loai_mon_an->doc_loai_mon_an_theo_ma_loai($ma_loai_mon_an);  //để hiện loại món hiện hành
			$loai_mon_ans=$m_loai_mon_an->doc_loai_mon_an();  //lấy tất cả các loại món ăn
			
		}
		
		//lấy dữ liệu đã chỉnh sửa
		if(isset($_POST["cap_nhat"]))
		{
			//khai báo các biến			
			$ma_loai=$_POST["ma_loai"];
			$ten_mon=$_POST["ten_mon"];
			$noi_dung_tom_tat=$_POST["noi_dung_tom_tat"];
			$noi_dung_chi_tiet=$_POST["noi_dung_chi_tiet"];
			$don_gia=$_POST["don_gia"];
			$don_gia_khuyen_mai=$_POST["don_gia_khuyen_mai"];
			$khuyen_mai=$_POST["khuyen_mai"];
						
			$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:$mon_an->hinh;		
			$ngay_cap_nhat=$_POST["ngay_cap_nhat"];
			$dvt=$_POST["dvt"];
			//$trong_ngay=$_POST["trong_ngay"];
			//Khi checkbox không được lựa chọn đồng nghĩa giá trị của checkbox không được truyền lên server. Vì vậy trong quá trình lấy dữ liệu nên kèm theo câu lệnh isset() để kiểm tra.
			if(isset($_POST["trong_ngay"]))
			{
				$trong_ngay=1;
			}
			else
			{
				$trong_ngay=0;
			}
			$param=array($ma_mon,$ma_loai,$ten_mon,$noi_dung_tom_tat,$noi_dung_chi_tiet,$don_gia,$don_gia_khuyen_mai,$khuyen_mai,$hinh,$ngay_cap_nhat,$dvt,$trong_ngay);			
			//var_dump($param);	
			$kq=$m_mon_an->sua_mon_an($ma_mon,$ma_loai,$ten_mon,$noi_dung_tom_tat,$noi_dung_chi_tiet,$don_gia,$don_gia_khuyen_mai,$khuyen_mai,$hinh,$ngay_cap_nhat,$dvt,$trong_ngay);
			
			if($kq)
			{
				$_SESSION["msg"]="Lưu dữ liệu thành công";
				//di chuyển hình
				if($_FILES["hinh"]["error"]==0)
				{
					move_uploaded_file($_FILES["hinh"]["tmp_name"],"../public/images/hinh_mon_an/$hinh");
					$_SESSION["msg"].=" và lưu hình thành công";
				}
				
			}
			else
			{
				$_SESSION["msg"]="Lưu dữ liệu thất bại";
			}
			//di chuyển về trang danh sách món ăn
			header("location:mon_an.php");
		}
		
		
		//view
		include '../controllers/smarty_nhahang_quantri.php';
			$smarty= new smarty_nhahang_quantri;
			$smarty->assign("tieude","Sửa Món ăn");
			$smarty->assign("loai_mon",$loai_mon_an);
			$smarty->assign("loai_mons",$loai_mon_ans);
			$smarty->assign("mon_an",$mon_an);
			$smarty->assign("view","../../../views/mon_an/v_admin_sua_mon_an.tpl");
			$smarty->display("admin/layout.tpl");
	}
	
	public function xoa_mon_an()
	{
		//models
		if(isset($_GET["ma_mon"]))
		{
			$m_mon_an= new M_mon_an;
			$kq=$m_mon_an->xoa_mon_an($ma_mon);
			if($kq)
			{
				$_SESSION["msg"]="Xóa món ăn thành công";
			}
			else
			{
				$_SESSION["msg"]="Xóa món ăn thất bại";
			}
			header("location:mon_an.php");
		}
	}
}
?>