<div class="main">
    <div class="container">
       <h3 class="prev-indent-bot">{$tieude_mon}</h3>
       <div>
       		{foreach $mon_ans as $mon_an}
       		<!--item-->
            <div class="p4" style="width:220px; margin:5px; float:left">
                <figure><a class="lightbox-image" href="public/images/hinh_mon_an/{$mon_an->hinh}" data-gal="prettyPhoto[prettyPhoto]"><img src="public/images/hinh_mon_an/{$mon_an->hinh}" alt="" width="210px" height="125px"></a></figure>
                <h5 align="center"><a href="chi_tiet_mon_an.php?ma_mon={$mon_an->ma_mon}">{$mon_an->ten_mon}<a> </h5>
                <p class="p1 hide">{$mon_an->noi_dung_tom_tat}</p>   <!--class hide này viết trong css để nếu nội dung dài quá thì sẽ ẩn đi tránh là cho định dạng thay đổi-->
                <p class="p2"><strong class="color-2">Giá: {number_format($mon_an->don_gia)}đ/đĩa - SL: <input type="text" value="1" size="3"/></strong></p>
                <a class="button-1" href="#">Mua</a>
            </div>
            <!--item-->
            {/foreach}
            <div style="clear:both; padding:20px; text-align:center">{$lst}</div>
       </div>
    </div>
</div>