<?php
include 'models/m_thuc_don.php';   //do class này sẽ được gọi khi chạy thuc_don.php nên khi chạy thì thuc_don.php cùng cấp với models
include 'pager.php';  //dùng phân trang
class C_thuc_don
{
	
	public function hien_thi_thuc_don()
	{
		//models
			//khai báo đối tượng
			$m_thuc_don= new M_thuc_don;
			$thuc_dons=$m_thuc_don->doc_thuc_don();
			//echo count($thuc_dons);  //đẻ kt xem kq trả về
			//phân trang
				$p=new pager;
				$limit=6;   //cho 6 thực đơn trên 1 trang
				$count=count($thuc_dons);   //tổng số trang
				$vt=$p->findStart($limit);  //tìm vị trí đầu tiên của trang
				$pages=$p->findPages($count,$limit);//tổng trang
				$curpage=$_GET["page"];//trang hiện hành 
				$lst=$p->pageList($curpage,$pages);  //dữ liệu để hiện phân trang
				$thuc_dons=$m_thuc_don->doc_thuc_don($vt,$limit);  //đọc lại danh sách thực đơn
			//kết thúc phân trang
			
			//lấy dữ liệu cho v_thuc_don_top_left.tpl khi click vào thực đơn bên dưới
			if(isset($_GET["ma_thuc_don"]))
			{
				$ma_thuc_don=$_GET["ma_thuc_don"];				
			}
			else
			{
				$ma_thuc_don=$thuc_dons[0]->ma_thuc_don;				
			}
			$thuc_don=$m_thuc_don->doc_thuc_don_theo_ma_thuc_don($ma_thuc_don);
			
			//đọc chi tiết thực đơn
			$ct_thuc_dons=$m_thuc_don->doc_chi_tiet_thuc_don($ma_thuc_don);
			//echo count($chi_tiet_thuc_dons);
		//view
			//chèn thư viện smarty
			include 'controllers/smarty_nhahang.php';
			//khai báo biến
			$smarty= new Smarty_nha_hang;
			$smarty->assign("thuc_dons",$thuc_dons);  //gửi dữ liệu thực đơn qua v_thuc_don_bottom_left.tpl
			
			$smarty->assign("thuc_don",$thuc_don);    //gửi dữ liệu thực đơn qua v_thuc_don_top_left.tpl
			
			$smarty->assign("ct_thuc_dons",$ct_thuc_dons);    //gửi dữ liệu thực đơn qua v_thuc_don_right.tpl
			
			$smarty->assign("lst",$lst);  //gửi dữ liệu để hiện phân trang
			$smarty->assign("tieude","Thực Đơn");
			$smarty->assign("view","views/thuc_don/v_thuc_don.tpl");
			$smarty->display("thuc_don/layout.tpl"); 
	}
}

?>