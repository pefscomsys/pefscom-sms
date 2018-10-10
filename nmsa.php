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
	url: "searchst.php",
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
		width:950px;margin-left:-120px;
		
		padding:10px;
		font-size:21px;
	}
	#result
	{
		position:absolute;
		width:950px;
		padding:10px;margin-left:-170px;
		display:none;
		margin-top:-20px;
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
						

		
<div style="float:left; width:900px;height:40px;background:rgb(120,80,100);">
<div style="float:left; width:100px; height:80px;color:#fff;font-size:22px;">
<div style="float:left;margin-top:5px;margin-left:5px;">&#9658;</div>


 
 </div>

 <div style="float:left; width:620px;color:#1188aa; height:30px;font-size:28px;color:#fff;text-transform:uppercase;">Section To Moderate Semester Result</div>
 
 
 
 
 </div>
 </div>
 </div>
 </div>
	
 </div>

 <div style="float:left; width:900px;">
					<div class="list-group" style='margin-top:25px;'><?php
					$db1=$_GET['db1'];
 $query="select CAST(levels as text) as levels from [cg2015].[dbo].[levels] where levels>'' ";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
?>

  <a href="transfersgba.php?levels=<?php echo $levels=$row['levels'];?>&db1=<?php echo $db1;?>" class="list-group-item">
    <span class="badge"><?php echo $levels;?></span>
   <?php echo $levels=$row['levels'];?>
  </a>
		 <?php } ?>

			  
  </div>

 
 
 