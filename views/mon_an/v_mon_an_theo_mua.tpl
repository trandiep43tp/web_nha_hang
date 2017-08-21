<!--chèn ajax-->

<script type="text/javascript" src="public/layout/js/thu_vien_ajax.js"></script>
<div class="main">
    <div class="container">
       <table align="center" width="350px" border="1" cellpadding="18px" bgcolor="#FEF3CB">
       <tr>
       	<td bgcolor="#33CCFF" style="font-size:24px; color:#FFF" align="center">XEM MÓN ĂN THEO MÙA</td>
       </tr>
       <tr>
       	<td align="center" style="font-size:16px; font-weight:bold; height:30px; padding:10px; color:#06F">
        	<input type="radio" name="mua" id="xuan" value="xuan" checked><label style="cursor:pointer" for="xuan">Xuân</label>
            <input type="radio" name="mua" id="ha" value="ha"><label style="cursor:pointer" for="ha">Hạ</label>
            <input type="radio" name="mua" id="thu" value="thu"><label style="cursor:pointer" for="thu">Thu</label>
            <input type="radio" name="mua" id="dong" value="dong"><label style="cursor:pointer" for="dong">Đông</label>
            <!--thuộc tính cursor:pointer là khi di chuyển con chuột đến thì hiển thị dạng pointer. vào gg xem thêm-->
        </td>
       </tr>
       <tr><td align="center"><input type="button" name="xem" value="Hiển Thị" onClick="" class="button-2"></td></tr>
       </table>
       <div id="the_hien"></div>
    </div>
</div>
<!--<script language="javascript">
$("input[type='button']").click(function(){
	alert("kiểm tra");
	});
</script>-->
<script language="javascript">
/*$("input[type='radio']").click(function(){
	alert ("trạng thái checked");
	})*/

$(':checked').click(function(){
	alert ("trạng thái checked");
	})
</script>