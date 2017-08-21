<!--chèn ckeditor-->
<!--<script type="text/javascript" src="../public/ckeditor/ckeditor.js"></script>-->
<script type="text/javascript" src="../public/ckeditor/ckeditor.js"></script>

<!--chèn jquery ui datepicker-->
	<!--trong input ngay cap nhat cho id= ngay_cap_nhat-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#ngay_cap_nhat" ).datepicker({
		changeMonth: true,
      	changeYear: true
	  });
	$( "#ngay_cap_nhat" ).datepicker( "option", "dateFormat", "yy-mm-dd" ); <!--format ngày tháng-->
  } );
  </script>

<!--/jquery ui datepicker-->
<!--viết javascrip để kiểm tra  dữ liệu khi nhập-->
<script language="javascript">
$(document).ready(function(e) {
    $('#cap_nhat').click(function(){
		var ten_mon=$('#ten_mon');
		if(ten_mon.val()=="")
		{
			alert("Bạn phải nhập tên món");
			ten_mon.focus();
			return false;
		}
		return true;
		})
});
</script>
<!--hết kiểm tra dữ liệu-->
<h3>Thêm User</h3>
<form method="post" enctype="multipart/form-data" name="frm">
<table width="800" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td>User Name<td>
    <td><input type="text" name="username" id="username"/></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password"/>   </td>
  </tr>
  <tr>
    <td>Full Name</td>
    <td><input type="text" name="fullname"/></td>
  </tr>
   <tr>
    <td>Birthday</td>
    <td><input type="text" name="birthday" id="ngay_cap_nhat"/></td>
  </tr>
  <tr>
    <td>Giới Tính</td>
    <td><select>    </select>
    </td>
  </tr>
  <tr>
    <td>Địa Chỉ</td>
    <td><input type="text" name="diachi" size="30"/></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="text" name="email" size="50"/></td>
  </tr>
  <tr>
    <td>Mã Xác Nhận</td>
    <td><input type="text" name="ma_xac_nhan"/></td>
  </tr>
 
  <tr>
    <td>Điện Thoại</td>
    <td><input type="text" name="dien_thoai"/></td>
  </tr>
  <tr>
    <td>Quyền</td>
    <td><input type="" name="trong_ngay"/> </td>
  </tr>
  <tr align="center">
    <td colspan="2">
    	<input type="submit" name="cap_nhat" value="Cập Nhật" id="cap_nhat"/>&nbsp;&nbsp;
        <input type="button" name="bo_qua" value="Bỏ Qua" onClick="window.location='danh_sach_user.php'"/>
    </td>    
  </tr>
</table>
</form>