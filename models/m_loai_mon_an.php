<?php
require_once 'database.php';
class M_loai_mon_an extends database
{
	//phương thức cho người dùng
	//dọc loại món ăn nếu có phân trang hoặc đọc hết
	public function doc_loai_mon_an($vitri=-1,$limit=-1)
	{
		$sql="SELECT * FROM loai_mon_an";
		if($vitri>=0&&$limit>0)
		{
			$sql.=" limit $vitri,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function doc_loai_mon_an_theo_ma_loai($ma_loai)
	{
		$sql="select * from loai_mon_an where ma_loai=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_loai));
	}
	//phương thức cho quản trị
	//`ma_loai`, `ten_loai`, `mo_ta`, `hinh`
	//thêm 
		public function them_loai_mon_an($ten_loai,$mo_ta,$hinh)
		{
			$sql="INSERT INTO loai_mon_an VALUES(?,?,?,?)";			
			$this->setQuery($sql);
			$param=array(null,$ten_loai,$mo_ta,$hinh);			
			return $this->execute($param);
		}
	
	//sửa
		public function sua_loai_mon_an($ma_loai,$ten_loai,$mo_ta,$hinh)
		{
			$sql="UPDATE loai_mon_an SET ten_loai=?,mo_ta=?,hinh=? WHERE ma_loai=?";
			$this->setQuery($sql);
			$param=array($ten_loai,$mo_ta,$hinh,$ma_loai);  //chú ý phải truyền theo đúng thứ tự của câu lệnh sql
			return $this->execute($param);
		}
		
		
	//xóa
		public function xoa_loai_mon_an($loai_mon)
		{
			$sql= "delete from loai_mon_an where ma_loai=?";
			$this->setQuery($sql);
			$param=array($loai_mon);
			return $this->execute($param);
		}
	
}

//test thử
$loai_mon_an = new M_loai_mon_an();
//$loai_mon_an->them_loai_mon_an("test","test","hinh.jpg");

?>