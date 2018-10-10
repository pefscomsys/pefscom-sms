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

				
	<div style="float:left; width:750px;height:30px;background:rgb(120,80,100);margin-left:100px; margin-top:25px;">
				
		<a href="#">	
<div style="float:left; width:350px;height:30px; ">	
<div style="float:left; width:10px; height:30px; background:#989898;">	
							
				
				
	
</div>	
<div style="float:left; width:290px; height:30px; background:#FFBB40;">	

<div style="float:left;text-align:left; margin-left:0px; font-size:16px; width:320px; height:20px;margin-top:5px;">
							
		Moderate all semester		
				
	</div>
</div>
</div>	

</a>		


<div style="float:left; width:750px; height:200px; background:#FFBB40;">	

<form name="form1" action="st222.php?roll=<?php echo $fish;?>" method="post" enctype="multipart/form-data" >

     <table style="" cellpadding="2"  cellspacing="0px" align="left" width="650px"style="line-height:22px;text-transform:uppercase;font-family:arial;">
	


	<tr style="border-bottom:1px solid #fff;">
<td> SEMESTER</td>
<td><select name="sex" class="required" id="select8"style="background:#fff;padding:4px;">
               
                <option value=""></option>
                <option value="1">1</option>

 <option value="2">2</option>

 <option value="3">3</option>
</SELECT>

</TD></TR>


<td>SELECT MARKS </td><td>
               
	
			<select name="marks" class="required" id="select8"style="background:#fff;padding:4px;">
               
                <option value=""></option>
                <option value="1">1</option>
 <option value="2">2</option>
 
                 <option value="3">3</option>
 <option value="4">4</option>
 
 
 
                 <option value="5">5</option>
 <option value="6">6</option>
 
                 <option value="7">7</option>
 <option value="8">8</option>
 
 
 
                 <option value="9">9</option>
 <option value="10">10</option>
 
 
 
                 <option value="11">11</option>
 <option value="12">12</option>
 
                 <option value="13">13</option>
 <option value="14">14</option>
 
                 <option value="15">15</option>
 <option value="16">16</option>
                 <option value="17">17</option>

                 <option value="18">18</option>

                 <option value="19">19</option>
				  <option value="20">20</option>
                <option value="-1">-1</option>
 <option value="-2">-2</option>
 
                 <option value="-3"->3</option>
 <option value="-4">-4</option>
 
 
 
                 <option value="-5">-5</option>
 <option value="-6">-6</option>
 
                 <option value="-7">-7</option>
 <option value="-8">-8</option>
 
 
 
                 <option value="-9">-9</option>
 <option value="-10">-10</option>
 
 
 
 
 
 </select>
			</TD></TR>

		<tr   style="border-bottom:1px solid #000;">
      <td style="text-transform:uppercase;width:250px;">Course</td
	  ><td>
<select name="subject"style="background:#fff;padding4px;"  >
<?php
$lev=$_GET['levels'];$db1=$_GET['db1'];$dept=$_GET['dept'];
$rs=mssql_query("  select   CAST(db1 as nvarchar(400)) as db1, CAST(acc as nvarchar(400)) as acc,CAST(subject as nvarchar(400)) as subject
,CAST(year2 as nvarchar(400)) as year2



 from [cg2015].[dbo].[subject]  where acc='$db1'  and year1='$lev'  and department='$dept' order by subject,year2   DESC  ",$link);
	  while($row=mssql_fetch_array($rs))
{
if($row[1]==$fees)
{
echo "<option value='$row[subject]' selected>$row[db1] - $row[subject] </option>";
}
else
{
echo "<option value='$row[subject]'>$row[db1] - $row[subject] </option>";
}
}
?></select></td></tr>

<input type='hidden' name='department' value='<?php echo $dept;?>'> 
<input type='hidden' name='db1' value='<?php echo $db1;?>'> 
<input type='hidden' name='levels' value='<?php echo $lev;?>'>
   <td>
	
<input name="button" type="submit" value="Process" onClick="javascript:return validateMyForm();self.close();"style="padding:10px 45px;"/>
</td></tr>
 </table>
	
		
</div>
        </div>
 
      <!-- /.modal-dialog --> 
   </div>