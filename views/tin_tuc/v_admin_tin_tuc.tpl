<!--viết java cho nút xóa-->
<script language="javascript">
	function xoatintuc(ma_tin_tuc)
	{
		if(confirm("Bạn có chắc chắn muốn xóa"))  <!--nếu đồng ý-->
		{
			window.location="xoa_tin_tuc.php?ma_tin_tuc="+ma_tin_tuc;   <!--chuyển về trang xóa loại mon ăn-->
		}
	}
</script>
<h2>Tin Tức</h2>
<h3 align="center" style="color:red">{if isset($msg)} {$msg} {/if}</h3>  <!--dùng để thông báo khi thêm, sửa, xóa-->
<table width="900" border="0" cellpadding="5" cellspacing="0">  
  <tr style="background-color:#0FF; color:#36F; text-align:center; height:30px">
    <td width="100px">Mã Tin Tức</td>
    <td width="100px">Tiêu Đề</td>
    <td>Nội Dung Tóm Tắt</td>
    <td width="150px">Hình</td>
    <td width="50px">&nbsp;</td>
    <td width="50px">&nbsp;</td>
  </tr>
  {foreach $tin_tucs as $tin}
  <tr>
    <td align="center">{$tin->ma_tin_tuc}</td>
    <td>{$tin->tieu_de}</td>
    <td align="justify" style="padding:5px">{$tin->tom_tat}</td>
    <td align="justify"><img src="../public/images/tin_tuc/{$tin->hinh}" width="60px" height="60px" style="margin-left:30px" ></td>
    <td align="center"><a href="sua_tin_tuc.php?ma_tin_tuc={$tin->ma_tin_tuc}">Sửa</a></td>
    <td align="center"><a href="javascript:void(0)" onClick="xoatintuc({$tin->ma_tin_tuc})" >Xóa</a></td>
    <!--khi click vào nút xóa thì sự kiện onclick sẽ chạy-->
  </tr>
  {/foreach}
 
</table>
<div style="clear:both; text-align:center; margin-top:25px">{$lst}</div>