
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<script type="text/javascript">
$(function(){
$(".search").keyup(function() 
{ 
var searchid = $(this).val();
var dataString = 'search='+ searchid;
if(searchid!='')
{
	$.ajax({
	type: "POST",
	url: "search.php",
	data: dataString,
	cache: false,
	success: function(html)
	{
	$("#result").html(html).show();
	}
	});
}return false;    
});

jQuery("#result").live("click",function(e){ 
	var $clicked = $(e.target);
	var $name = $clicked.find('.name').html();
	var decoded = $("<div/>").html($name).text();
	$('#searchid').val(decoded);
});
jQuery(document).live("click", function(e) { 
	var $clicked = $(e.target);
	if (! $clicked.hasClass("search")){
	jQuery("#result").fadeOut(); 
	}
});
$('#searchid').click(function(){
	jQuery("#result").fadeIn();
});
});
</script>
<style type="text/css">
	body{ 
background:#efefef;
		font-family:Tahoma, Geneva, sans-serif;
		font-size:18px;
	}
	.content{
		width:600px;
		margin:0 auto;
	}
	#searchid
	{
		width:500px;
		border:solid 1px #000;
		padding:10px;
		font-size:14px;
	}
	#result
	{
		position:absolute;
		width:500px;
		padding:10px;
		display:none;
		margin-top:-1px;
		border-top:0px;
		overflow:hidden;
		border:1px #CCC solid;
		background-color: white;
	}
	.show
	{
		padding:10px; 
		border-bottom:1px #999 dashed;
		font-size:15px; 
		height:50px;
	}
	.show:hover
	{
		background:#4c66a4;
		color:#FFF;
		cursor:pointer;
	}
</style>
</head>

<body>
	<div style="float:left; width:800px; height:400px;">
	
<form name="look" method="post" action="petchs.php">
<table style=" border:1px solid silver" cellpadding="5px" cellspacing="0px" align="center" border="0" width="600px">
<tr>
<td colspan="4" style=" color:#000; font-size:20px; background:#ffcc00;">Search - student to print transcript</td>
</tr>
<tr>
<td>
<div class="content">
<input type="text" class="search" name="search"id="searchid" placeholder="Search for student " />
&nbsp; &nbsp;<br /> 
<div id="result"></td>
<td><input type="submit" value="Search" /></td>
</tr>
<tr bgcolor="#666666" style="color:#fff;">
<td style="color:#fff">Name of student</td>
<td style="color:#fff">Form</td>
<td style="color:#fff">Matricule</td>

<tr>
<td colspan="3"></td></tr>
<tr bgcolor="#CCCCCC">
</tr>
</table>
</form>
</fieldset>
	</div>
	
	</div>
	
	</div>
	
	
	
	
	</body>
	</html>