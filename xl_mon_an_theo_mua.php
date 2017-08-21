<?php	
		$mua=$_POST["mua"];
		//echo 'Đây là mùa:'.$_POST["mua"];
		//mở tập tin
		$path="public/images/mon_an_theo_mua/mon_an_theo_mua.txt"; //đường dẫn
		$f=fopen($path,"r") or die("lỗi mở file");
		$noidung=array();
		//duyệt tập tin để lấy nội dung
		while(!feof($f))
		{
			$noidung[]=fgets($f);  //hàm fgets là duyệt từng dòng nội dung trong tập tin
		}
		//đóng tập tin
		fclose($f);
	
?>
<p></p>  <!--để cho cách nút xem ra-->
<table width="100%" border="1" cellspacing="5" cellpadding="5" align="center" style="font-size:16px" >
  <tr align="center" style="background-color:#0CF; color:#FFF; font-weight:bold; height:50px">    
    <td style="padding-top:15px">Tên Món</td>
    <td style="padding-top:15px">Mô tả</td>
    <td style="padding-top:15px; padding-right:25px">Hình</td>
    <td style="padding-top:15px" >Giá</td>
  </tr>
  <?php
  $i=0;
	   foreach($noidung as $nd)   //$nd sẽ là một chuỗi
		{
			$row=explode("|",$nd);   //tạo mảng từ chuỗi
			if(trim($mua)==trim($row[5]))
			{	
				$i++;			   
   ?>
      <tr align="justify" style="margin:5px; padding:15px" class="<?php if($i%2==0) echo "le";   ?> ">        
        <td width="150px" valign="middle" style="padding:10px"><?php echo $row[1]   ?></td>
        <td style="padding:10px; margin-left:25px"><?php echo $row[3]   ?></td>
        <td width="100px" valign="middle">
        	<img src="public/images/mon_an_theo_mua/<?php echo $mua ?>/<?php echo $row[4] ?>" width="80px" height="80px"/>
        </td>
        <td width="80px" valign="middle"><?php echo number_format($row[2]) ?></td>
      </tr>
  <?php
			}
		}
  ?>
</table>
<style>
.le{
	background:#9FF;;
}
.hienthi{
	margin:20px;
	padding:10px;
}
</style>