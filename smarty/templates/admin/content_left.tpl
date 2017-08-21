<script>
$(document).ready(function(e) {
    var pgurl=window.location.href.substr(window.location.href.lastIndexOf("/")+1);
	var id=null;
	if(pgurl=="") pgurl=".";
	$("#main-nav li a").each(function() {
        if($(this).attr("href")==pgurl||$(this).attr("href")=='')
		{
			var title=$(this).attr("title");
			id=document.getElementById(title);
			$(this).addClass("current");
			$(id).addClass("current");
		}
    });
	$(id).click();
});

</script>


<ul id="main-nav" >
	<li>
    	<a href="quantri.php" class="nav-top-item" >
        	Danh Mục
        </a>
    </li>
    <li>
    	<a href="#" class="nav-top-item" id="tintuc">Tin Tức</a>
        <ul>
        	<li><a href="#" title="tintuc">Danh Sách Tin Tức</a></li>
            <li><a href="#" title="tintuc">Thêm Tin Tức</a></li>
        </ul>
    </li>
    
    <li>
    	<a href="loai_mon_an.php" class="nav-top-item" id="loaimon">Loại Món Ăn</a>
        <ul>
        	<li><a href="loai_mon_an.php" title="loaimon">Danh Sách Loại Món Ăn</a></li>
            <li><a href="#" title="loaimon">Thêm Loại Món Ăn</a></li>
        </ul>
    </li>
    
    <li>
    	<a href="#" class="nav-top-item" id="monan">Món Ăn</a>
        <ul>
        	<li><a href="#" title="monan">Danh Sách Món Ăn</a></li>
            <li><a href="#" title="monan">Thêm Món Ăn</a></li>
        </ul>
    </li>
    
     <li>
    	<a href="#" class="nav-top-item" id="user">User</a>
        <ul>
        	<li><a href="#" title="user">Danh Sách User</a></li>
            <li><a href="#" title="user">Thêm user</a></li>
        </ul>
    </li>

</ul>

<style type="text/css">
#quantri{
	background-color:#0CF;
}
#main-nav{
	width:200px;
	float:left;
	text-align:right;
	font-weight:bold;
	line-height:2.3em;
}
#main_nav ul li{
	margin:15px;
	
}
.nav-top-item{
	background:#80FF00;
	height:25px;
}

</style>