<?php
include("smarty/libs/Smarty.class.php");
class Smarty_nha_hang extends Smarty
{
	function Smarty_nha_hang()
	{
		parent::__construct();
		$this->setCacheDir("smarty/cache/");
		$this->setCompileDir("smarty/templates_c/");
		$this->setConfigDir("smarty/configs/");
		$this->setTemplateDir("smarty/templates/");	
	}
		
}

?>