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
		width:1000px;margin-left:-120px;
		
		padding:10px;border-bottom:1px solid #000;
		font-size:21px;
	}
	#result
	{
		position:absolute;
		width:1000px;
		padding:10px;margin-left:-210px;
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
						

				
					
					
					
					
					<a href="#" class="btn btn-danger btn-lg btn-block" >Department </a>
					<div class="list-group" style='margin-top:25px;'><?php
					$leve=$_GET['levels'];$db1=$_GET['db1'];
 $query="select CAST(classs as text) as levels,CAST(ids as text) as ids,CAST(code as text) as code from [cg2015].[dbo].[classes] ";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
?>

  <a href="moderate5.php?dept=<?php echo $levels=$row['levels'];  $levels=$row['code'];?>&levels=<?php echo $leve;?>&db1=<?php echo $db1;?>" class="list-group-item">
    <span class="badge"><?php echo $levels;?></span>
   <?php echo $levels=$row['levels'];?>
   
   <b style='font-weight:normal;color:#ccc;'>(<?php $nm= $row["ids"];





	  
$qry = mssql_query("SELECT CAST(facultydesc as text) as totals
from [cg2015].[dbo].[faculty] where facultyid='$nm' "); 
$row = mssql_fetch_assoc($qry); 

 echo $idss=$row['totals'];

?> )</b>
  </a>
		 <?php } ?>

			  
        </div>
 
      <!-- /.modal-dialog --> 
   </div>