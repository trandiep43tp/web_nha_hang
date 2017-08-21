<?php
require_once("database.php");
class M_thuc_don extends database
{

	public function lay_thuc_don_cho_gio_hang($chuoi)
    {
        $query="Select * from thuc_don where ma_thuc_don in($chuoi)";
		$this->setQuery($query);
		return $this->loadAllRows();
    }
	
	public function doc_thuc_don($vt=-1,$limit=-1)
	{
		$sql="select * from thuc_don ";
		if($vt>=0 && $limit>0)
		{
			$sql.="limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	public function doc_thuc_don_theo_ma_thuc_don($ma_thuc_don)
	{
		$sql="select * from thuc_don where ma_thuc_don=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_thuc_don));
	}
	public function doc_chi_tiet_thuc_don($ma_thuc_don)
	{
		$sql="select m.* from thuc_don_mon_an td INNER JOIN mon_an m ON td.ma_mon=m.ma_mon where td.ma_thuc_don=?";
		$this->setQuery($sql);
		return $this->loadAllRows(array($ma_thuc_don));
	}
	public function doc_thuc_don_con_lai($ma_thuc_don)
	{
		$sql="select * from thuc_don where ma_thuc_don!=?";
		$this->setQuery($sql);
		return $this->loadAllRows(array($ma_thuc_don));
	}
	public function them_thuc_don($ten_thuc_don, $don_gia, $don_gia_khuyen_mai, $noi_dung, $hinh_thuc_don)
	{
		$sql="insert into thuc_don values(?, ?, ?, ?, ?, ?)";
		$this->setQuery($sql);
		$this->execute(array("NULL", $ten_thuc_don, $don_gia, $don_gia_khuyen_mai, $noi_dung, $hinh_thuc_don));
	}
	public function them_mon_vao_thuc_don($ma_thuc_don,$ma_mon)
	{
		$sql="insert into thuc_don_mon_an values(?, ?, ?)";
		$this->setQuery($sql);
		$this->execute(array($ma_thuc_don,$ma_mon,1));
	}
	public function sua_thuc_don($ma_thuc_don,$ten_thuc_don, $don_gia, $don_gia_khuyen_mai, $noi_dung, $hinh_thuc_don)
	{
		$sql="update thuc_don set ten_thuc_don=?, don_gia=?, don_gia_khuyen_mai=?, noi_dung=?, hinh_thuc_don=? where ma_thuc_don=?";
		$this->setQuery($sql);
		$this->execute(array($ten_thuc_don, $don_gia, $don_gia_khuyen_mai, $noi_dung, $hinh_thuc_don,$ma_thuc_don));
	}
	public function xoa_thuc_don($ma_thuc_don)
	{
		$sql="delete from thuc_don where ma_thuc_don=?";
		$this->setQuery($sql);
		$this->execute(array($ma_thuc_don));
	}
}
?>