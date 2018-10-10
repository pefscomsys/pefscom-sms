<?php
include 'dbcs.php';
?><html>
<head>

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="jquery-1.8.0.min.js"></script><script type="text/javascript">
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
						
<a href="#" class="btn btn-danger btn-lg btn-block">Select Academic Year for Data Entry</a>
					<div class="list-group" style='margin-top:25px;'><?php
 $query="select CAST(facultydesc as nvarchar(400)) as fag,facultyid as fas from [cg2015].[dbo].[faculty] ";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
?>

  <a href="nmstu.php?school=<?php echo $fa=$row['fag'];?>&faid=<?php echo $x=$row['fas'];?>" class="list-group-item">
    <?php echo $fa;?>
	<span class="badge"><?php echo $fa;?></span>
 
  </a>
		 <?php } ?>

			  
        </div>
	
	
	</div>
			  
        </div>
 
      <!-- /.modal-dialog --> 
   </div>