<h3>Chi Tiết Thực Đơn</h3>
{foreach $ct_thuc_dons as $mon}
<!--item-->
<div style="margin-top:10px; border-bottom:#999 dashed 1px; padding-bottom:10px">  
  <img src="public/images/hinh_mon_an/{$mon->hinh}" alt="" width="210px" height="135px" style="float:right"> 
  <h4>{$mon->ten_mon} - giá: {number_format($mon->don_gia)}đ</h4>
  {$mon->noi_dung_tom_tat}
  <a class="button-1" href="chi_tiet_mon_an.php?ma_mon={$mon->ma_mon}">Xem Tiếp</a> 
</div>
<!--item-->
{/foreach}