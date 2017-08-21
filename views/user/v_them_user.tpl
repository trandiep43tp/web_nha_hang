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
<table class="table " width="800" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td>User Name</td>
    <td><input type="text" name="username" /></td>
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
    <td>Gender</td>
    <td>
        <input type="radio" name="gioi_tinh" value="Nam"/> Nam &nbsp;&nbsp;  &nbsp;&nbsp;
        <input type="radio" name="gioi_tinh" value="Nu" /> Nữ
     </td>
  </tr>
  <tr>
    <td>Address</td>
    <td><input type="text" name="address" size="50"/></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="text" name="email"/></td>
  </tr>
  <tr>
    <td>Indentity Card</td>
    <td><input type="text" name="card"/></td>
  </tr>
 
  <tr>
    <td>Mobiphone</td>
    <td><input type="text" name="mobiphone"/></td>
  </tr>
  <tr>
    <td>Quyền</td>
    <td><input type="" name="trong_ngay"/> </td>
  </tr>
  <tr align="center">
    <td colspan="2">
    	<input class="btn btn-primary" type="submit" name="cap_nhat" value="Cập Nhật" id="cap_nhat"/>&nbsp;&nbsp;
        <input class="btn btn-primary" type="button" name="bo_qua" value="Bỏ Qua" onClick="window.location='danh_sach_user.php'"/>
    </td>    
  </tr>
</table>
</form>