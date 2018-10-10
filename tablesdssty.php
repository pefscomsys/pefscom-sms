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
						

				
					
					<div style="width:900px; height:auto;margin:auto;">

	<div style="float:left; width:900px; height:auto;background:#ccc;font-size:21px;">
<?php

$query="select CAST(sems as text) as sems, CAST(db1 as text) as db1 from [cg2015].[dbo].[semester] ";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
		 
		 
 
?>

	<div style="float:left; width:218px; height:100px;margin-left:4px;">
	
	<div style="float:left; width:230px; margin-top:10px;">
	<div style="float:left; width:208px;text-align:center; height:57px; background:#efefef; font-family:impact;">
	<a href="tablesdsst.php?roll=<?php echo $off6=$row['sems'];?>">
	<div style="float:left; width:208px; margin-top:10px;">
<?php  echo $off6=$row['db1'];


?>
	
	</div></a>
	
	</div>
	</div>
	</div>
	<?php } ?>
	
	</div>
			  
        </div>
 
      <!-- /.modal-dialog --> 
   </div>