
<div class="col-md-9 content">
	<h3><span class="label label-success ">Quản Trị Nhà Hàng</span></h3>
    <p>Ngày Cập Nhật:<strong style="color:red"> {$smarty.now|date_format:"%A, %B %d, %Y"}</strong></p>
    
    
    <div class="row" style="margin-top:25px; margin-left:15px; text-align:justify " >
    <a href="mon_an.php"><button class="btn btn-primary" style="width:120px; height:60px; margin-right:10px" >Món Ăn</button></a>
    <a href="loai_mon_an.php"><button class="btn btn-primary" style="width:120px; height:60px;margin-right:10px" >Loại Món</button></a>
    <a href="#"><button class="btn btn-primary" style="width:120px; height:60px;margin-right:10px" >Tin Tức</button></a>
    <a href="#"><button class="btn btn-primary" style="width:120px; height:60px;margin-right:10px" >Hóa Đơn</button></a>
    <a href="#"><button class="btn btn-primary" style="width:120px; height:60px;margin-right:10px" >User</button></a>
    
    </div>
	<div style="border-top:#09F solid 1px; margin:15px">
		{if isset($view)}
         {include file="$view"}
        {/if}
	</div>

    <div style="border-top:#0CF solid 1px; margin-top:200px">
   		 Copy right 
    </div>
    

</div>


<!--
	date_format conversion specifiers:

%a - abbreviated weekday name according to the current locale

%A - full weekday name according to the current locale

%b - abbreviated month name according to the current locale

%B - full month name according to the current locale

%c - preferred date and time representation for the current locale

%C - century number (the year divided by 100 and truncated to an integer, range 00 to 99)

%d - day of the month as a decimal number (range 01 to 31)

%D - same as %m/%d/%y

%e - day of the month as a decimal number, a single digit is preceded by a space (range 1 to 31)

%g - Week-based year within century [00,99]

%G - Week-based year, including the century [0000,9999]

%h - same as %b

%H - hour as a decimal number using a 24-hour clock (range 00 to 23)

%I - hour as a decimal number using a 12-hour clock (range 01 to 12)

%j - day of the year as a decimal number (range 001 to 366)

%k - Hour (24-hour clock) single digits are preceded by a blank. (range 0 to 23)

%l - hour as a decimal number using a 12-hour clock, single digits preceeded by a space (range 1 to 12)

%m - month as a decimal number (range 01 to 12)

%M - minute as a decimal number

%n - newline character

%p - either `am' or `pm' according to the given time value, or the corresponding strings for the current locale

%r - time in a.m. and p.m. notation

%R - time in 24 hour notation

%S - second as a decimal number

%t - tab character

%T - current time, equal to %H:%M:%S

%u - weekday as a decimal number [1,7], with 1 representing Monday

%U - week number of the current year as a decimal number, starting with the first Sunday as the first day of the first week

%V - The ISO 8601:1988 week number of the current year as a decimal number, range 01 to 53, where week 1 is the first week that has at least 4 days in the current year, and with Monday as the first day of the week.

%w - day of the week as a decimal, Sunday being 0

%W - week number of the current year as a decimal number, starting with the first Monday as the first day of the first week

%x - preferred date representation for the current locale without the time

%X - preferred time representation for the current locale without the date

%y - year as a decimal number without a century (range 00 to 99)

%Y - year as a decimal number including the century

%Z - time zone or name or abbreviation

%% - a literal `%' character
-->