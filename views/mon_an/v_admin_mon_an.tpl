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
<h3 style="color:red; font-weight:bold">Món Ăn</h3>
<h3 align="center" style="color:red">{*if isset($msg)*} {$msg} {*/if*}</h3>  <!--dùng để thông báo khi thêm, sửa, xóa-->
<table width="800" border="1" cellspacing="5" cellpadding="5" style="text-align:center">
  <tr style="background-color:#3FC;">
    <td>Mã Món</td>
    <td width="100">Tên Món</td>
    <td>Nội Dung Tóm Tắt</td>
    <td width="100">Đơn giá</td>
    <td width="50">&nbsp;</td>
    <td width="50">&nbsp;</td>
  </tr>
  {foreach $mon_ans as $mon}
  <tr>
    <td id="mamon">{$mon->ma_mon}</td>
    <td>{$mon->ten_mon}</td>
    <td style="text-align:justify; padding:5px">{$mon->noi_dung_tom_tat}</td>
    <td>{number_format($mon->don_gia)}</td>
    <td><a href="sua_mon_an.php?ma_mon={$mon->ma_mon}">Sửa</a></td>
    <td><a href="javascript:void(0)" id="xoa" onClick="xoa_mon_an({$mon->ma_mon})" >Xóa</a></td>
  </tr>
  {/foreach}
</table>
<div style="text-align:center; margin-top:35px">{$lst}</div>
