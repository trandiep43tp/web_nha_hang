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

<h3>Sửa Món Ăn</h3>
<form method="post" enctype="multipart/form-data" name="frm">
<table width="800" border="0"  cellspacing="5" cellpadding="5">
  <tr >
    <td>Tên Món</td>
    <td><input type="text" name="ten_mon" value="{$mon_an->ten_mon}"/></td>
  </tr>
  <tr>
    <td>Loại Món</td>
    <td>
        <select name="ma_loai" >
        	{if isset($loai_mon)}
            	<option value="{$loai_mon->ma_loai}">{$loai_mon->ten_loai}</option>
            {/if}
            {foreach $loai_mons as $loai}
            {if $loai->ma_loai!=$loai_mon->ma_loai}    <!--có đòng if này để tránh trùng dữ liệu-->        
        	<option value="{$loai->ma_loai}" >{$loai->ten_loai}</option>
            {/if}
            {/foreach}
        </select>
    </td>
  </tr>
  <tr>
    <td>Nội Dung Tóm Tắt</td>
    <td><textarea name="noi_dung_tom_tat" rows="5" cols="50" >{$mon_an->noi_dung_tom_tat}</textarea></td>
  </tr>
  <tr>
     <td>Nội Dung Chi Tiết</td>
    <td><textarea name="noi_dung_chi_tiet" rows="5" cols="50" class="ckeditor" id="noi_dung_chi_tiet">{$mon_an->noi_dung_chi_tiet}</textarea>
    <script language="javascript">CKEDITOR.replace("noi_dung_chi_tiet")</script>
    </td>
  </tr>
  <tr>
    <td>Đơn Giá</td>
    <td><input type="text" size="30" name="don_gia" value="{$mon_an->don_gia}"/></td>
  </tr>
  <tr>
    <td>Đơn giá Khuyến Mãi</td>
    <td><input type="text" name="don_gia_khuyen_mai" size="30" value="{$mon_an->don_gia_khuyen_mai}"/></td>
  </tr>
  <tr>
    <td>Khuyến Mãi</td>
    <td><input type="text" name="khuyen_mai" size="50" value="{$mon_an->khuyen_mai}"/></td>
  </tr>
   <tr>
    <td>Hình Ảnh Cũ</td>
    <td><img src="../public/images/hinh_mon_an/{$mon_an->hinh}" width="80px" height="80px"></td>
  </tr>
  <tr>
    <td>Hình Ảnh mới</td>
    <td><input type="file" name="hinh"/></td>
  </tr>
  <tr>
    <td>Ngày Cập Nhật</td>
    <td><input type="date" name="ngay_cap_nhat"  value="{$mon_an->ngay_cap_nhat}"/></td>
  </tr>
  <tr>
    <td>Đvt</td>
    <td><input type="text" name="dvt" value="{$mon_an->dvt}"/></td>
  </tr>
  <tr>
    <td>Trong Ngày</td>
    <td><input type="checkbox" name="trong_ngay" {if $mon_an->trong_ngay==1} {"checked"} {/if}/> </td>
  </tr>
  <tr align="center">
    <td colspan="2">
    	<input type="submit" class="btn btn-primary"  name="cap_nhat" value="Cập Nhật"/>&nbsp;&nbsp;
        <input type="button" class="btn btn-primary" name="bo_qua" value="Bỏ Qua" onClick="window.location='mon_an.php'"/>
    </td>    
  </tr>
</table>
</form>