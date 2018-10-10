<?php
include 'dbcs.php';
?><html>
<head>

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
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
	
	.content{
		width:600px;
		margin:0 auto;
	}
	#searchid
	{
		width:900px;margin-left:-20px;
		
		padding:10px;border-bottom:1px solid #000;
		font-size:21px;
	}
	#result
	{
		position:absolute;
		width:900px;
		padding:10px;margin-left:-180px;
		display:none;
		margin-top:-30px;
		border-top:0px;
		overflow:hidden;
		background-color: white;
	}
	.show
	{
		padding:10px; 
		border-bottom:1px #999 dashed;
	
		height:50px;font-size:21px;
	}
	.show:hover
	{
		background:red;
		color:#FFF;
		cursor:pointer;
	}
</style>
</head>
<body>  
						

				
					
					
					
					
					
				
        <div class="table-responsive">

              
			  
			  
<form name="look" method="post" action="petchs.php">
<table  class="table table-bordred table-striped" style=" border:1px solid silver" cellpadding="5px" cellspacing="0px" align="center" border="0" width="600px">
<tr>
<td colspan="4" style=" color:#000; font-size:20px; background:#ffcc00;">Search - Student of Interest (use Name or Matricule)</td>
</tr>
<tr>
<td>
<div class="content">
<input type="text" class="search" name="search"id="searchid" placeholder="Search for student " style='float:left;margin-left:-160px;'/>
&nbsp; &nbsp;<br /> 
<div id="result"></td>
<td>
 </td>

</tr>
</table>
</form>
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
        </div>
 
      <!-- /.modal-dialog --> 
   </div>