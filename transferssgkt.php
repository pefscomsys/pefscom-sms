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
						

				
					
					<?php
					$leve=$_GET['levels'];
					$dept=$_GET['dept'];$db1=$_GET['db1'];
					?>
					
					
					<a href="#" class="btn btn-danger btn-lg btn-block" >Select Courses for <?php echo $dept;?> -Department Level <?php echo $leve;?> </a>
					<div class="list-group" style='margin-top:25px;'><?php
					$leve=$_GET['levels'];
 $query="select CAST(db1 as text) as levels,CAST(subject as text) as code from [cg2015].[dbo].[subject] where year1='$leve'  and department='$dept'";
$result=mssql_query($query);
		 while ($row = mssql_fetch_array($result)) {
?>

  <a href="transfersgkst.php?dept=<?php echo $subs=$row['levels'];  $subss=$row['code'];?>&levels=<?php echo $leve;?>&db1=<?php echo $db1;?>&dept=<?php echo $dept;?>&sub=<?php echo $subss;?>" class="list-group-item">

   <?php echo $levels=$row['levels'];?> <b style='color:#efefef;'>(<?php echo $subss;?>)</b>
  </a>
		 <?php } ?>

			  
        </div>
 
      <!-- /.modal-dialog --> 
   </div>