
<!DOCTYPE html>
<html lang="en">
<head>
    <title>bài 2</title>
    <meta charset="utf-8">
  <!--  <link rel="stylesheet" href="public/layout/css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="public/layout/css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="public/layout/css/layout.css" type="text/css" media="screen"> 
    <script src="public/layout/js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="public/layout/js/cufon-yui.js" type="text/javascript"></script>
    <script src="public/layout/js/cufon-replace.js" type="text/javascript"></script> 
    <script src="public/layout/js/Dynalight_400.font.js" type="text/javascript"></script>
    <script src="public/layout/js/FF-cash.js" type="text/javascript"></script>
    <script src="public/layout/js/tms-0.3.js" type="text/javascript"></script>
    <script src="public/layout/js/tms_presets.js" type="text/javascript"></script>
    <script src="public/layout/js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="public/layout/js/jquery.equalheights.js" type="text/javascript"></script>    
-->    
	<!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
        	<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
	<![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
	<![endif]-->
</head>
<body >

<h2>Thêm Loại Món Ăn</h2>
<form method="post" name="frm" enctype="multipart/form-data">
<table width="700" border="0" cellspacing="40" cellpadding="15">
  <tr>
    <td>Tên Loại Món Ăn</td>
    <td><input type="text" name="ten_loai" id="ten_loai_mon_an" size="30"/></td>
  </tr>
  <tr>
    <td>Mô Tả</td>
    <td><textarea name="mo_ta" rows="5" cols="50" style="text-align:justify"></textarea></td>
  </tr>
  <tr style="margin-bottom:20px">
    <td>Hình Ảnh</td>
    <td><input type="file" name="hinh"/></td>
  </tr>
  <tr align="center">
    <td colspan="2">
    <input class="btn btn-primary" type="submit" name="cap_nhat" id="cap_nhat" value="Cập Nhật"/>&nbsp;&nbsp;&nbsp;
    <input class="btn btn-primary" type="button" name="bo_qua" value="Bỏ Qua" onClick="window.location='loai_mon_an.php'"/>
    </td>
    
  </tr>
</table>
</form>
<?php
include 'models/m_loai_mon_an.php';
if(isset($_POST["cap_nhat"]))
		{
			$ten_loai=$_POST["ten_loai"]; //post lấy theo name
			$mo_ta=$_POST["mo_ta"];
			$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:"";
			$m_loai_mon_an= new M_loai_mon_an;
			$kq=$m_loai_mon_an->them_loai_mon_an($ten_loai,$mo_ta,$hinh);
			$st=$ten_loai."   ".$mo_ta."  ".$hinh;
			echo $st;
			if($kq) //cập nhật thành công
			{
				echo 'thành công';
				//di chuyển hình về thư mục để lưu
				if($hinh!="")
				{
					move_uploaded_file($_FILES["hinh"]["tmp_name"],"public/images/hinh_loai_mon_an/$hinh");
				}
				//chuyển về trang danh sách loại_mon_an
				//header("location:loai_mon_an.php");
			}
			else
			{
				echo "lõi";
			}
		}
?>

<!--==============================footer=================================-->
    <footer>
        <div class="main">
        	<div class="aligncenter">
            	<span>Catering.com &copy; 2012</span>
                <a rel="nofollow" class="link" target="_blank" href="http://www.templatemonster.com/">Website Template</a> by TemplateMonster.com | <a rel="nofollow" class="link" target="_blank" href="http://www.html5xcss3.com/">html5xcss3.com</a>
            </div>
        </div>
    </footer>
    <script type="text/javascript"> Cufon.now(); </script>
    <script type="text/javascript">
		$(window).load(function() {
			$('.slider')._TMS({
				duration:1000,
				easing:'easeOutQuint',
				preset:'slideDown',
				slideshow:7000,
				banners:false,
				pauseOnHover:true,
				pagination:true,
				pagNums:false
			});
		});
    </script>
</body>
</html>