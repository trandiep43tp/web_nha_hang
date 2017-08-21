<h3 class="p1">Thực Đơn Tiệc Cưới</h3>
<div>

{foreach $thuc_dons as $thuc_don}
	<!--item-->
  <div class="p2" style="float:left; margin:5px">
    <figure><a href="thuc_don.php?ma_thuc_don={$thuc_don->ma_thuc_don}&page={$smarty.get.page}"><img src="public/images/thuc_don/{$thuc_don->hinh_thuc_don}" alt="" width="130px" height="100px"></a></figure>
    <h5 align="center">{$thuc_don->ten_thuc_don}</h5>
    (Giá: {number_format($thuc_don->don_gia)}đ/bàn) 
   </div>
   <!--item-->
   {/foreach}
  <div style="clear:both; text-align:center; padding:15px">{$lst}</div>
</div>
