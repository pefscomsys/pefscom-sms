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
	url: "searchsthxs.php?x=<?php echo $id;?>",
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
		width:950px;
		margin:0 auto;
	}
	#searchid
	{
		width:950px;margin-left:0px;
		
		padding:10px;
		font-size:17px;
	}
	#result
	{
		position:absolute;
		width:450px;
		padding:10px;margin-left:0px;
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
	
		height:50px;font-size:17px;
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
						

				
					
					
			
				

              
			  
			  

<div class="content">
<input type="text" class="search" name="search"id="searchid" placeholder="Search for student " style='float:left;margin-left:0px;'/>
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