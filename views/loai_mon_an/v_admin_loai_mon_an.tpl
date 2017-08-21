<!--viết java cho nút xóa-->
<script language="javascript">
	function xoaloaimonan(ma_loai)
	{
		if(confirm("Bạn có chắc chắn muốn xóa"))  <!--nếu đồng ý-->
		{
			window.location="xoa_loai_mon_an.php?ma_loai="+ma_loai;   <!--chuyển về trang xóa loại mon ăn-->
		}
	}
</script>
<h2>Loại Món Ăn</h2>
<h3 align="center" style="color:red">{if isset($msg)} {$msg} {/if}</h3>  <!--dùng để thông báo khi thêm, sửa, xóa-->
<table width="900" border="0" cellpadding="5" cellspacing="0">  
  <tr style="background-color:#0FF; color:#36F; text-align:center; height:30px">
    <td width="50px">Mã loại Món</td>
    <td width="100px">Tên loại Món</td>
    <td>Mô tả</td>
    <td width="150px">Hình</td>
    <td width="50px">&nbsp;</td>
    <td width="50px">&nbsp;</td>
  </tr>
  {foreach $loai_mon_ans as $loai}
  <tr>
    <td align="center">{$loai->ma_loai}</td>
    <td>{$loai->ten_loai}</td>
    <td align="justify" style="padding:5px">{$loai->mo_ta}</td>
    <td align="justify"><img src="../public/images/hinh_loai_mon_an/{$loai->hinh}" width="60px" height="60px" style="margin-left:30px" ></td>
    <td align="center"><a href="sua_loai_mon_an.php?ma_loai={$loai->ma_loai}">Sửa</a></td>
    <td align="center"><a href="javascript:void(0)" onClick="xoaloaimonan({$loai->ma_loai})">Xóa</a></td>
    <!--khi click vào nút xóa thì sự kiện onclick sẽ chạy-->
  </tr>
  {/foreach}
 
</table>
<div style="clear:both; text-align:center; margin-top:25px">{$lst}</div>