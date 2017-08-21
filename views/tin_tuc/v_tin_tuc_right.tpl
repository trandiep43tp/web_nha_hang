<h3 class="p1" style="margin-left:25px">Tin Tức Mới</h3>
<div>
{foreach $tin_tucs as $tin}
	<!--item-->
  <div class="p2" style="float:right; margin:15px;width:180px">
    <a href="tin_tuc.php?ma_tin_tuc={$tin->ma_tin_tuc}"><img src="public/images/tin_tuc/{$tin->hinh}" alt="" width="180px" height="120px"></a>
    <h5 style="text-align:center">{$tin->tieu_de}</h5>     
   </div>
   <!--item-->
   {/foreach}
</div>

