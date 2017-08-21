<?php
require_once("database.php");
class M_tin_tuc extends database
{
	public function doc_tin_tuc($vt=-1,$limit=-1)
	{
		$sql="select * from tin_tuc ";
		if($vt>=0 && $limit>0)
		{
			$sql.="limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	public function doc_tin_tuc_moi($limit)
	{
		$sql="select * from tin_tuc order by ngay_dang limit 0,$limit ";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	public function doc_tin_tuc_theo_ma_tin_tuc($ma_tin_tuc)
	{
		$sql="select * from tin_tuc where ma_tin_tuc=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_tin_tuc));
	}
	public function doc_tin_tuc_con_lai($ma_tin_tuc)
	{
		$sql="select * from tin_tuc where ma_tin_tuc!=?";
		$this->setQuery($sql);
		return $this->loadAllRows(array($ma_tin_tuc));
	}
	public function them_tin_tuc( $tieu_de, $tom_tat, $chi_tiet, $hinh, $tac_gia, $ngay_dang, $ngay_gui, $so_luot_xem)
	{
		$sql="insert into tin_tuc values(?,?,?,?,?,?,?,?,?)";
		$this->setQuery($sql);
		$param=array(null,$tieu_de,$tom_tat,$chi_tiet,$hinh,$tac_gia,$ngay_dang,$ngay_gui,$so_luot_xem);
		return $this->execute($param);
	}
	public function sua_tin_tuc($ma_tin_tuc, $tieu_de, $tom_tat, $chi_tiet, $hinh, $tac_gia, $ngay_dang, $ngay_gui, $so_luot_xem)
	{
		$sql="update tin_tuc set  tieu_de=?, tom_tat=?, chi_tiet=?, hinh=?, tac_gia=?, ngay_dang=?, ngay_gui=?, so_luot_xem=? where ma_tin_tuc=?";
		$this->setQuery($sql);
		$param=array($tieu_de,$tom_tat,$chi_tiet,$hinh,$tac_gia,$ngay_dang,$ngay_gui,$so_luot_xem,$ma_tin_tuc);
		return $this->execute($param);
	}
	public function xoa_tin_tuc($ma_tin_tuc)
	{
		$sql="delete from tin_tuc where ma_tin_tuc=?";
		$this->setQuery($sql);
		return $this->execute(array($ma_tin_tuc));
	}
}
$test= new M_tin_tuc;
echo "<pre>";
print_r($test->xoa_tin_tuc(6));
echo "</pre>";
?>