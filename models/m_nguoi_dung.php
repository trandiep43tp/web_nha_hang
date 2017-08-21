<?php
require_once("database.php");
class M_use extends database
{
	public function danh_sach_user($vt=-1,$limit=-1)
	{
		$sql="SELECT * FROM user ";
		if($vt>=0&&$limit>0)
		{
			$sql.=" limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	//`id`, `username`, `password`, `fullname`, `birthdate`, `gender`, `address`, `email`, `identitycard`, `mobiphone`, `role`
	public function them_user($username,$password,$fullname,$birthdate,$gender,$address,$email,$identitycard,$mobiphone,$role)
	{
		$sql="INSERT INTO user VALUES(?,?,?,?,?,?,?,?,?,?,?)";
		$this->setQuery($sql);
		$param=array(null,$username,$password,$fullname,$birthdate,$gender,$address,$email,$identitycard,$mobiphone,$role);
		return $this->execute($param);
	}
	
	public function sua_user()
	{
	}
	
	
	public function xoa_user()
	{
	}
}

?>