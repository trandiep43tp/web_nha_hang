<?php
include 'models/m_mon_an.php';
include 'pager.php';
class C_mon_an
{
	public function hien_thi_mon_an()
	{
		//có models
		$m_mon_an= new M_mon_an;
		$mon_ans=$m_mon_an->doc_mon_an();
		//echo count($mon_ans);
		//phân trang
			$p= new pager;
			$limit=8;       //số bản tin hiển thị
			$count=count($mon_ans);  //tổng số bản tin
			$vt=$p->findStart($limit);  //vị trí đầu tiên của trang
			$pages=$p->findPages($count,$limit);    //tính tổng số trang
			$curpage=$_GET["page"];   //trang hiện hành
			$lst=$p->pageList($curpage,$pages);   //dữ liệu để hiện phân trang
			$mon_ans=$m_mon_an->doc_mon_an($vt,$limit);  //đọc lại danh sách
			//echo count($mon_ans);
		
		//hết phân trang
		//view
		include 'controllers/smarty_nhahang.php';
			$smarty= new Smarty_nha_hang;
			$smarty->assign("tieude","Danh Sách Món Ăn");
			$smarty->assign("tieude_mon","Danh Sách Món Ăn");			
			$smarty->assign("mon_ans",$mon_ans);
			$smarty->assign("lst",$lst);
			$smarty->assign("view","views/mon_an/v_mon_an.tpl");
			$smarty->display("mon_an/layout.tpl");
	}
	
	
	public function hien_thi_mon_an_trong_ngay()
	{
		//có models
		$m_mon_an= new M_mon_an;
		$mon_ans=$m_mon_an->doc_mon_an_trong_ngay();
		//echo count($mon_ans);
		//phân trang
			$p= new pager;
			$limit=8;       //số bản tin hiển thị
			$count=count($mon_ans);  //tổng số bản tin
			$vt=$p->findStart($limit);  //vị trí đầu tiên của trang
			$pages=$p->findPages($count,$limit);    //tính tổng số trang
			$curpage=$_GET["page"];   //trang hiện hành
			$lst=$p->pageList($curpage,$pages);   //dữ liệu để hiện phân trang
			$mon_ans=$m_mon_an->doc_mon_an_trong_ngay($vt,$limit);  //đọc lại danh sách
			//echo count($mon_ans);
		
		//hết phân trang
		//view
		include 'controllers/smarty_nhahang.php';
			$smarty= new Smarty_nha_hang;
			$smarty->assign("tieude","Danh Sách Món Ăn");
			$smarty->assign("tieude_mon","Danh Sách Món Ăn Trong Ngày");
			
			$smarty->assign("mon_ans",$mon_ans);
			$smarty->assign("lst",$lst);
			$smarty->assign("view","views/mon_an/v_mon_an.tpl");
			$smarty->display("mon_an/layout.tpl");
	}
	
	
	public function hien_thi_chi_tiet_mon_an()
	{
		//models			
		$ma_mon=$_GET["ma_mon"];		
		$m_chi_tiet_mon_an= new M_mon_an;
		$mon_an=$m_chi_tiet_mon_an->doc_chi_tiet_mon_an($ma_mon);
		//lấy món ăn cùng loại		
		$ma_loai=$mon_an->ma_loai;
		$mon_an_cung_loai=$m_chi_tiet_mon_an->doc_mon_an_cung_loai($ma_loai,$ma_mon);
		//phân trang cho món ăn cùng loại
			$p= new pager;
			$limit=4;
			$count=count($mon_an_cung_loai);
			$vt=$p->findStart($limit);    //vị trí đầu tiên của trang
			$pages=$p->findPages($count,$limit);  ///số trang
			$curpage=$_GET["page"];   //trang hiện hành
			$option="&ma_mon=$ma_mon";	//phải có option trong trường hợp này không là bị lỗi do không tìm được get.mamon
			$lst=$p->pageList($curpage,$pages,$option);  //dữ liệu hiển thị phân trang
			$mon_an_cung_loai=$m_chi_tiet_mon_an->doc_mon_an_cung_loai($ma_loai,$ma_mon,$vt,$limit);
		    //hết phân trang
			//hiển thị lại món ăn khi click bên dưới
			if(isset($_GET["ma_mon"]))
			{
				$ma_mon=$_GET["ma_mon"];
			}
			else
			{
				$ma_mon=$mon_an_cung_loai[0]->ma_mon;
			}
			$mon_an=$m_chi_tiet_mon_an->doc_chi_tiet_mon_an($ma_mon);
			
		
		//view
		include 'controllers/smarty_nhahang.php';
			$smarty= new Smarty_nha_hang;
			$smarty->assign("tieude","Chi Tiết Món Ăn");
			$smarty->assign("tieude_mon","Món Ăn Cùng Danh Mục");
			$smarty->assign("mon_an",$mon_an);
			$smarty->assign("mon_an_cung_loai",$mon_an_cung_loai);
			$smarty->assign("curpage",$curpage);  //gửi trang hiện hành sang, nếu không gửi thì khi nhấn 1 món ăn trang 2 nó sẽ load về các mmons ăn cùng danh mục trog trang 1
			$smarty->assign("lst",$lst);
			$smarty->assign("view","views/mon_an/v_chi_tiet_mon_an.tpl");
			$smarty->display("mon_an/layout.tpl");
	}
	
	public function hien_thi_mon_an_theo_mua()
	{
		//models
		
		//view
			include 'controllers/smarty_nhahang.php';
			$smarty= new Smarty_nha_hang;
			$smarty->assign("tieude","Món Ăn Theo Mùa");			
			$smarty->assign("view","views/mon_an/v_mon_an_theo_mua.tpl");
			$smarty->display("mon_an/layout.tpl");
		
	}
	
}


?>