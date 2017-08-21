<!--viết java kiểm tra dữ liệu sửa viết băng javascrip-->
<script language="javascript">
	function kiemtradulieu()
	{
		var ten_loai=document.getElementById("ten_loai");
		if(ten_loai.value=="")
		{
			alert("Bạn phải nhập tên loại");
			ten_loai.focus();
			return false;
		}
		return true;
	}
</script>
<h2>Sửa Loại Món Ăn</h2>
<form method="post" name="frm" enctype="multipart/form-data">
<table width="700" border="1" cellspacing="40" cellpadding="15">
  <tr>
    <td>Tên Loại Món Ăn</td>
    <td><input type="text" name="ten_loai" id="ten_loai" size="30" value="{$loai->ten_loai}"/></td>
  </tr>
  <tr>
    <td>Mô Tả</td>
    <td ><textarea name="mo_ta" rows="5" cols="50" style="text-align:justify">{$loai->mo_ta}
    </textarea></td>
  </tr>
  <tr>
  	<td>Hình Ảnh Cũ</td>
    <td><img src="../public/images/hinh_loai_mon_an/{$loai->hinh}" width="60px" height="60px"></td>
    
  </tr>
  <tr  >
    <td>Hình Ảnh Mới</td>
    <td><input type="file" name="hinh"/></td>
  </tr>
  <tr align="center">
    <td colspan="2">
    <input class="btn btn-primary" type="submit" name="cap_nhat" value="Cập Nhật" onClick=" return kiemtradulieu()"/>&nbsp;&nbsp;&nbsp;
    <input class="btn btn-primary" type="button" name="bo_qua" value="Bỏ Qua" onClick="window.location='loai_mon_an.php'"/>
    </td>
    
  </tr>
</table>

</form>