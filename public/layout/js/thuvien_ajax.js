// JavaScript Document
function xemmonan()
{
	var chk=document.getElementsByName("mua");
	var mua="";
	for(i=0;i<chk.length;i++)
	{
		if(chk.item(i).checked)
		{
			mua=chk.item(i).value;
			break;	
		}	
	}
	if(mua=="")
	{
		alert("Xin vui lòng chọn món theo mùa");
		return false;	
	}
	// ajax
	var xmlhttp;
	if (window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200) // hoan thanh va tim thay trang 
		{
			document.getElementById("hienthi").innerHTML=xmlhttp.responseText;
		}
	}
	
	xmlhttp.open("POST","xl_mon_an_theo_mua.php",true);
	/* sử dụng POST */
	var data = new FormData();
	data.append('mua', mua);
	xmlhttp.send(data);
	
}


function Doc_tin_tuc(ma_tin_tuc)
{
	// ajax
	var xmlhttp;
	if (window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200) // hoan thanh va tim thay trang 
		{
			document.getElementById("hienthi").innerHTML=xmlhttp.responseText;
		}
	}
	
	xmlhttp.open("POST","xl_tin_tuc.php",true);
	/* sử dụng POST */
	var data = new FormData();
	data.append('ma_tin_tuc', ma_tin_tuc);
	xmlhttp.send(data);

	
}

function timmonan(gtTim)
{
	// ajax
	var xmlhttp;
	if (window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200) // hoan thanh va tim thay trang 
		{
			document.getElementById("hienthi").innerHTML=xmlhttp.responseText;
		}
	}
	
	xmlhttp.open("POST","xl_tim_kiem.php",true);
	/* sử dụng POST */
	var data = new FormData();
	data.append('gtTim', gtTim);
	xmlhttp.send(data);
}
