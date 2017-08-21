<!--viết java co nút xóa-->
<script language="javascript">
	/*$(document).ready(function(e) {
		$('#xoa').click(function(){
			if(confirm("Bạn có chắc chắn muốn xóa"))
				{
					var ma_mon=$('#mamon').html();
					window.location="xoa_mon_an.php?ma_mon="+ma_mon;
				}
			});
	});
	*/	
	function xoa_mon_an(ma_mon)
	{
			if(confirm("Bạn có chắc chắn muốn xóa"))
			{
				window.location="xoa_mon_an.php?ma_mon="+ma_mon;
			}
	}
</script>
<h3 style="color:red; font-weight:bold">Danh Sách User</h3>
<h3 align="center" style="color:red">{*if isset($msg)*} {$msg} {*/if*}</h3>  <!--dùng để thông báo khi thêm, sửa, xóa-->
<table width="800" border="1" cellspacing="5" cellpadding="5" style="text-align:center">
  <tr style="background-color:#3FC;">
    <td>Mã user</td>
    <td width="100">Tên Đăng Nhập</td>
    <td>Tên Đầy Đủ</td>
    <td width="100">Địa Chỉ</td>
    <td width="100">Điện Thoại</td>
    <td width="50">&nbsp;</td>
    <td width="50">&nbsp;</td>
  </tr>
  {foreach $users as $user}
  <tr>
    <td id="mamon">{$user->id}</td>
    <td>{$user->username}</td>
    <td style="text-align:justify; padding:5px">{$user->fullname}</td>
    <td>{$user->address}</td>
    <td>{$user->mobiphone}</td>
    <td><a href="#">Sửa</a></td>
    <td><a href="#" id="xoa" onClick="" >Xóa</a></td>
  </tr>
  {/foreach}
</table>
<div style="text-align:center; margin-top:35px">{$lst}</div>
