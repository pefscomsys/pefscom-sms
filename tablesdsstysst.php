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
						

				
				<a href='nmsst.php'>	
					<div style="width:900px; height:auto;margin:auto;">

	<div style="float:left; width:356px; height:auto;font-size:21px;">
	
	
<div style="float:left; width:350px;height:39px; ">	
<div style="float:left; width:20px; height:35px; background:#989898;">	
							
				
				
	
</div>	
<div style="float:left; width:290px; height:35px; background:#FFBB40;">	

<div style="float:left;text-align:left; margin-left:10px; font-size:16px; width:280px; height:25px;margin-top:5px;">
							
	Register Marks 
				
	</div>
</div>
</div>	
</a>
	
	
	
	
	
	
	
	
	
	
	
				
				<a href='moderate.php'>	
	
	
<div style="float:left; width:350px;height:39px; ">	
<div style="float:left; width:20px; height:35px; background:#989898;">	
							
				
				
	
</div>	
<div style="float:left; width:290px; height:35px; background:#FFBB40;">	

<div style="float:left;text-align:left; margin-left:10px; font-size:16px; width:280px; height:25px;margin-top:5px;">
							
	

Moderate all semester 
				
	</div>
</div>
</div>	

</a>
	
	
	
	
	
				<a href='nmss.php'>	
<div style="float:left; width:350px;height:39px; ">	
<div style="float:left; width:20px; height:35px; background:#989898;">	
							
				
				
	
</div>	
<div style="float:left; width:290px; height:35px; background:#FFBB40;">	

<div style="float:left;text-align:left; margin-left:10px; font-size:16px; width:280px; height:25px;margin-top:5px;">
							
Make Correction Ca/Exam 
				
	</div>
</div>
</div>	
</a>
	
	
	
	
				<a href='ns.php'>	
<div style="float:left; width:350px;height:39px; ">	
<div style="float:left; width:20px; height:35px; background:#989898;">	
							
				
				
	
</div>	
<div style="float:left; width:290px; height:35px; background:#FFBB40;">	

<div style="float:left;text-align:left; margin-left:10px; font-size:16px; width:280px; height:25px;margin-top:5px;">
Correct a Single Result slip 
				
	</div>
</div>
</div>	
</a>

<div style="float:left; width:350px;height:39px; ">	
<div style="float:left; width:20px; height:35px; background:#989898;">	
							
				
				
	
</div>	
<div style="float:left; width:290px; height:35px; background:#FFBB40;">	

<div style="float:left;text-align:left; margin-left:10px; font-size:16px; width:280px; height:25px;margin-top:5px;">
Print Resit List 
				
	</div>
</div>
</div>	

	
				<a href='nst.php'>	
<div style="float:left; width:350px;height:39px; ">	
<div style="float:left; width:20px; height:35px; background:#989898;">	
							
				
				
	
</div>	
<div style="float:left; width:290px; height:35px; background:#FFBB40;">	

<div style="float:left;text-align:left; margin-left:10px; font-size:16px; width:280px; height:25px;margin-top:5px;">
Upload CA Mark(excell)
				
	</div>
</div>
</div>	

</a>
	
	
				<a href='nsts.php'>	
<div style="float:left; width:350px;height:39px; ">	
<div style="float:left; width:20px; height:35px; background:#989898;">	
							
				
				
	
</div>	
<div style="float:left; width:290px; height:35px; background:#FFBB40;">	

<div style="float:left;text-align:left; margin-left:10px; font-size:16px; width:280px; height:25px;margin-top:5px;">
Upload Exam Mark(excell)
				
	</div>
</div>
</div>	

</a>
	
	
	<a href='nstsyy.php'>	
<div style="float:left; width:350px;height:39px; ">	
<div style="float:left; width:20px; height:35px; background:#989898;">	
							
				
				
	
</div>	
<div style="float:left; width:290px; height:35px; background:#FFBB40;">	

<div style="float:left;text-align:left; margin-left:10px; font-size:16px; width:280px; height:25px;margin-top:5px;">
Upload Student Names
				
	</div>
</div>
</div>	
</a>

<div style="float:left; width:350px;height:39px; ">	
<div style="float:left; width:20px; height:35px; background:#989898;">	
							
				
				
	
</div>	
<div style="float:left; width:290px; height:35px; background:#FFBB40;">	

<div style="float:left;text-align:left; margin-left:10px; font-size:16px; width:280px; height:25px;margin-top:5px;">
Edit Payment
				
	</div>
</div>
</div>	
	
	
	
	
	
	
	</div>
			  
        </div>
 
      <!-- /.modal-dialog --> 
   </div>