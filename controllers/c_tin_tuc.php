<?php
include 'models/m_tin_tuc.php';
class C_tin_tuc
{
	public function hien_thi_tin_tuc()
	{
		//model
		$m_tin_tuc= new M_tin_tuc;
		$tin_tucs=$m_tin_tuc->doc_tin_tuc();
		if(isset($_GET['ma_tin_tuc']))
		{
			$ma_tin_tuc=$_GET['ma_tin_tuc'];
		}
		else
		{
			$ma_tin_tuc=$tin_tucs[0]->ma_tin_tuc;
		}
		$tin_tuc=$m_tin_tuc->doc_tin_tuc_theo_ma_tin_tuc($ma_tin_tuc);  //dể hiện thị dữ liệu bên trái
		//echo count($tin_tucs);
		//view
		include 'controllers/smarty_nhahang.php';
			$smarty= new Smarty_nha_hang;			
			$smarty->assign("tieude","Tin Tức");
			$smarty->assign("tin_tucs",$tin_tucs);
			$smarty->assign("tin_tuc",$tin_tuc);
			$smarty->assign("view","views/tin_tuc/v_tin_tuc.tpl");			
			$smarty->display("tin_tuc/layout.tpl");
	}
}

?>