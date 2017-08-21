<div class="main">
    <div class="container">
    	<div>
        	 <h3 class="prev-indent-bot">{$mon_an->ten_mon}</h3>
            <img src="public/images/hinh_mon_an/{$mon_an->hinh}" alt="" width="300px" style="float:left; margin-right:5px">
            <h5>{$mon_an->noi_dung_tom_tat}</h5>
            <p class="p1">{$mon_an->noi_dung_chi_tiet}</p>
            <p class="p1">Khuyến mãi: {$mon_an->khuyen_mai}</p>
            <p class="p2"><strong class="color-2">Giá: {number_format($mon_an->don_gia)}đ/đĩa - SL: <input type="text" value="1" size="3"/></strong></p>
            <a class="button-1" href="#">Mua</a>
    	</div>
        <div style="clear:both; padding:15px"></div>  
        
        <h3 class="prev-indent-bot">{$tieude_mon}</h3>
       <div>
       		{foreach $mon_an_cung_loai as $mon}
       		<!--item-->
            <div class="p4" style="width:220px; margin:5px; float:left">
                <figure><a class="lightbox-image" href="public/images/hinh_mon_an/{$mon->hinh}" data-gal="prettyPhoto[prettyPhoto]"><img src="public/images/hinh_mon_an/{$mon->hinh}" alt="" width="210px" height="125px"></a></figure>
                <h5><a href="chi_tiet_mon_an.php?ma_mon={$mon->ma_mon}&page={$curpage}">{$mon->ten_mon}<a> </h5>
                <p class="p1">{$mon->noi_dung_tom_tat}</p>
                <p class="p2"><strong class="color-2">Giá: {number_format($mon->don_gia)}đ/đĩa - SL: <input type="text" value="1" size="3"/></strong></p>
                <a class="button-1" href="#">Mua</a>
            </div>
            <!--item-->
            {/foreach}
            <div style="clear:both; padding:20px; text-align:center">{$lst}</div>
       </div>
    </div>
</div>