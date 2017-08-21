<!--viết code để kiểm tra dữ liệu dữ liệu-->
<script language="javascript">
$(document).ready(function(e) {
	$('#cap_nhat').click(function(){
		var tieude=$("#ten_loai_mon_an");
		 if(tieude.val()=="")
		 {
			 alert("Bạn phải nhập tên loại");
			 tieude.focus();
			 return false;
		 }
		 return true;
	})
   
});
</script>
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