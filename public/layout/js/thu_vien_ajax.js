// JavaScript Document
//thư viện này viết để xử lý ajax cho tìm kiếm theo mùa
/*function mon_an_theo_mua()
{
	//alert("Món Ăn");
	var mua=document.getElementsByName("mua");
	var gt="";
	for(i=0;i<mua.length;i++)
	{
		if(mua.item(i).checked)
		{
			gt=mua.item(i).value;
			break;
		}
	}
	if(gt=="")
	{
		alert("Vui lòng chọn!");
		return false;
	}
	//alert (gt);
	//ajax
	$.ajax()
}*/
$(document).ready(function(e) {	
   // $('.button-2')
	$("input[type='button']").click(function(){
		$.ajax({
			url:"xl_mon_an_theo_mua.php",
			type:"POST",
			dataType:"text",
			data:{
				mua: $('input:checked').val()
				},
			success: function(results)
			{
				$('#the_hien').html(results);
			}
			});
		})
});

/*function mon_an_theo_mua()
{
	

	gt=$('input:checked').val();
	
	if($('input:checked').val()=="")
	{
		alert("Vui lòng chọn!");
		return false;
	}
	else
	{
		alert($('input:checked').val());
	}
	
	
}*/
