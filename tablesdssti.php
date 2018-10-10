<?php
include 'dbcs.php';
$id=$_GET['roll'];
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
	url: "searchsth.php?x=<?php echo $id;?>",
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
						

				
					
					
					
					<ul class="nav nav-tabs">
  <li ><a href="tablesdsst.php?roll=<?php echo $id;?>" data-toggle="tab">Print Single Slip</a></li>
  <li class="active"><a href="tablesdssti.php?roll=<?php echo $id;?>" data-toggle="tab">Group/Department Slip </a></li>

  <li><a href="duplicates.php?roll=<?php echo $id;?>" data-toggle="tab">Clear Duplicate</a></li>
</ul>
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade active in" id="home">
    <p> This is printing slip by searching the student name and click print </p></div>

</div>
					
				
        <div class="table-responsive">

              
			  
			  
<form name="look" method="post" action="petchs.php">
<table  class="table table-bordred table-striped" style=" border:1px solid silver" cellpadding="5px" cellspacing="0px" align="center" border="0" width="600px">
<tr>
<td colspan="4" style=" color:#000; font-size:20px;"  class="alert alert-dismissible alert-info">Search - Student of Interest (use Name or Matricule)</td>
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