<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

</head>
<?php
	$err="";	
	include '../models/m_mon_an.php';
	$m_mon_an= new M_mon_an;
	include '../models/m_loai_mon_an.php';
	$m_loai_mon_an= new M_loai_mon_an;
	$loai_mon_ans=$m_loai_mon_an->doc_loai_mon_an();
?>
<body>

<?php
if(isset($_POST["cap_nhat"]))
		{
			//khai báo các biến
			$ma_mon=null;
			$ma_loai=$_POST["ma_loai"];
			$ten_mon=$_POST["ten_mon"];
			$noi_dung_tom_tat=$_POST["noi_dung_tom_tat"];
			$noi_dung_chi_tiet=$_POST["noi_dung_chi_tiet"];
			$don_gia=$_POST["don_gia"];
			$don_gia_khuyen_mai=$_POST["don_gia_khuyen_mai"];
			$khuyen_mai=$_POST["khuyen_mai"];
			//$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:"";	
			$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:"";		
			$ngay_cap_nhat=$_POST["ngay_cap_nhat"];
			$dvt=$_POST["dvt"];
			//$trong_ngay=$_POST["trong_ngay"];
			//Khi checkbox không được lựa chọn đồng nghĩa giá trị của checkbox không được truyền lên server. Vì vậy trong quá trình lấy dữ liệu nên kèm theo câu lệnh isset() để kiểm tra.
			if(isset($_POST["trong_ngay"])&&$_POST["trong_ngay"]=="on")
			{
				$trong_ngay=1;
			}
			else
			{
				$trong_ngay=0;
			}
			
			//$sql="INSERT INTO mon_an VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
			//$param=array(null,$ma_loai,$ten_mon,$noi_dung_tom_tat,$noi_dung_chi_tiet,$don_gia,$don_gia_khuyen_mai,$khuyen_mai,$hinh,$ngay_cap_nhat,$dvt,$trong_ngay);
			$kq=$m_mon_an->them_mon_an($ma_loai,$ten_mon,$noi_dung_tom_tat,$noi_dung_chi_tiet,$don_gia,$don_gia_khuyen_mai,$khuyen_mai,$hinh,$ngay_cap_nhat,$dvt,$trong_ngay);				
			
			
			if($kq)
			{
				$err="Lưu dữ liệu thành công";
				$_SESSION["msg"]="Lưu dữ liệu thành công";
				//di chuyển hình
				if($hinh!="")
				{
					move_uploaded_file($_FILES["hinh"]["tmp_name"],"../public/images/hinh_mon_an/$hinh");
					$_SESSION["msg"].=" và lưu hình thành công";
					$err.=" và lưu hình thành công";
				}
				
			}
			else
			{
				$_SESSION["msg"]="Lưu dữ liệu thất bại";
				$err="Lưu dữ liệu thất bại";
			}
			//di chuyển về trang danh sách món ăn
			//header("location:mon_an.php");
		}

?>



<h3>Thêm Món Ăn BÀI 1-1</h3>
<div><?php echo $err ?> </div>
<form method="post" enctype="multipart/form-data" name="frm">
<table width="800" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td>Tên Món</td>
    <td><input type="text" name="ten_mon" id="ten_mon"/></td>
  </tr>
  <tr>
    <td>Loại Món</td>
    <td>
        <select name="ma_loai">
        	 <?php
                    foreach($loai_mon_ans as $loai)
                    {
                ?>
        	<option value="<?php echo $loai->ma_loai ?>"><?php echo $loai->ten_loai?></option>
             <?php			
                    }
                ?>	
        </select>
    </td>
  </tr>
  <tr>
    <td>Nội Dung Tóm Tắt</td>
    <td><textarea name="noi_dung_tom_tat" rows="5" cols="50"></textarea></td>
  </tr>
  <tr>
     <td>Nội Dung Chi Tiết</td>
    <td><textarea name="noi_dung_chi_tiet" rows="5" cols="50" class="" id="noi_dung_chi_tiet"></textarea>
   <!-- <script language="javascript">ckeditor.replace("noi_dung_chi_tiet")</script>-->
    </td>
  </tr>
  <tr>
    <td>Đơn Giá</td>
    <td><input type="text" size="30" name="don_gia"/></td>
  </tr>
  <tr>
    <td>Đơn giá Khuyến Mãi</td>
    <td><input type="text" name="don_gia_khuyen_mai" size="30"/></td>
  </tr>
  <tr>
    <td>Khuyến Mãi</td>
    <td><input type="text" name="khuyen_mai" size="50"/></td>
  </tr>
  <tr>
    <td>Hình</td>
    <td><input type="file" name="hinh"/></td>
  </tr>
  <tr>
    <td>Ngày Cập Nhật</td>
    <td><input type="text" name="ngay_cap_nhat" id="ngay_cap_nhat"/></td>
  </tr>
  <tr>
    <td>Đvt</td>
    <td><input type="text" name="dvt"/></td>
  </tr>
  <tr>
    <td>Trong Ngày</td>
    <td><input type="checkbox" name="trong_ngay"/> </td>
  </tr>
  <tr align="center">
    <td colspan="2">
    	<input type="submit" name="cap_nhat" value="Cập Nhật" id="cap_nhat"/>&nbsp;&nbsp;
        <input type="button" name="bo_qua" value="Bỏ Qua" onClick="window.location='mon_an.php'"/>
    </td>    
  </tr>
</table>
</form>


</body>
</html>
