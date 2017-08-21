<?php
echo 'kỹ thuật lấy get cùng trang';
echo '<br>';
echo '<a href="bai1.php?ma_mon=1">Lấy Mã</a>';
if(isset($_GET["ma_mon"]))
{
	echo '<br>Mã Món:'.$_GET["ma_mon"];
}
?>