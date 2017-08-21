<?php
//chèn thư viện smarty
include '../smarty/libs/Smarty.class.php';
//viết 1 class
class smarty_nhahang_quantri extends Smarty
{
	function smarty_nhahang_quantri()      //tên hàm khởi tạo trùng với tên lớp
	{
		parent::__construct();
		//cấu hình
		$this->setCacheDir("../smarty/cache");   //chú ý đường dẫn so với smarty_nhahang.php
		$this->setConfigDir("../smarty/configs");
		$this->setTemplateDir("../smarty/templates");
		$this->setCompileDir("../smarty/templates_c");
	}
	
}

?>