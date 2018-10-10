<?php

include 'dbcs.php';
$ms=$_GET['roll'];
page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
if(@$_SESSION['userlevel']!=111){header("location: login.php?error=Unauthorized access");}

 $pic=$_GET["pic"];
$amp=$_GET["amp"];
$roll=$_GET["roll"];

 $ip=@$_SERVER['REMOTE_ADDR'];
 
 ?><?php


$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];

$levels=$row['user_level'];
?>
<?php } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Universal University System</title>
<link href="popupst.css" rel="stylesheet" type="text/css" />

</head>
 
<body>
 
<script src="jquery.min.js"></script>
   <script>
      // you can use just jquery for this
      $(document).ready(function(){
         $('#overlay-back').fadeIn(500,function(){
            $('#popup').show();
         });
 
         $(".close-image").on('click', function() {
            $('#popup').hide();
            $('#overlay-back').fadeOut(500);
         });
      });
   </script>

<div id="overlay-back"></div>
<div id="popup">
<div style="float:left; width:900px;margin-top:3px; height:500px;">

<div style="float:left; width:900px;height:40px;background:rgb(120,80,100);">
<div style="float:left; width:100px; height:80px;color:#fff;font-size:22px;">
<div style="float:left;margin-top:5px;margin-left:5px;">&#9658;</div>


 
 </div>

 <div style="float:left; width:620px;color:#1188aa; height:30px;font-size:28px;color:#fff;text-transform:uppercase;">Print Attendnace Record</div>
 
 
 
 
 </div>

				
	<div style="float:left; width:350px;height:30px; margin-left:100px; margin-top:25px;">
				
		<a href="#">	
<div style="float:left; width:350px;height:30px; ">	
<div style="float:left; width:10px; height:30px; background:#989898;">	
							
				
				
	
</div>	
<div style="float:left; width:290px; height:30px; background:#FFBB40;">	

<div style="float:left;text-align:left; margin-left:0px; font-size:16px; width:320px; height:20px;margin-top:5px;">
							
		Zero Attendance 	
				
	</div>
</div>
</div>	

</a>		


<div style="float:left; width:650px; height:200px; background:#FFBB40;">	

<form name="look" method="post" action="<?php 
$qry = mysql_query("select  tm as total
from page where cn='41' and id='$ids'   "); 
$row = mysql_fetch_assoc($qry); 

echo $rsy=$row['total']; ?>">

     <table style="" cellpadding="2"  cellspacing="0px" align="left" width="650px"style="line-height:22px;text-transform:uppercase;font-family:arial;">
	<tr   style="border-bottom:1px solid #fff;">
      <td style="text-transform:uppercase;width:300px;padding:4px;border-bottom:1px solid #000;">Department</td
	  ><td>

<select name="department"style="background:#fff;padding:4px;"><?php
$rs=mysql_query("Select * from matsub  order by  mgg",$link);
	  while($row=mysql_fetch_array($rs))
{
if($row[1]==$fees)
{
echo "<option value='$row[2]' selected>$row[2]</option>";
}
else
{
echo "<option value='$row[2]'>$row[2]</option>";
}
}
?></select></td></tr>



	<tr   style="border-bottom:1px solid #000;">
      <td style="text-transform:uppercase;background:#fff;padding:4px;width:150px;">Levels</td
	  ><td  style="text-transform:uppercase;background:#fff;padding:4px;width:150px;">

<select name="levels"style="background:#fff;padding:4px;">
<?php
$rs=mysql_query("Select * from levels where id='$ids'order by  levels",$link);
	  while($row=mysql_fetch_array($rs))
{
if($row[1]==$fees)
{
echo "<option value='$row[1]' selected>$row[1]</option>";
}
else
{
echo "<option value='$row[1]'>$row[1]</option>";
}
}
?></select></td></tr>
<tr>
<td>Month</td><td><select name="months" class="required" id="select8"style="background:#ccc;">
               
                <option value="Jan">January</option>
                <option value="Feb">Feb</option>
				
				<option value="Mar">Mar</option>
				
				
				<option value="Apr">Apr</option>
				
				<option value="Jun">Jun</option>
				
				
				
				
				<option value="Jul">Jul</option>
              
			  
			  
				<option value="Aug">Aug</option>
              
			  
				<option value="Sep">Sep</option>
              
			  
				<option value="Oct">Oct</option>
              
			  
				<option value="Nov">Nov</option>
			  
			  
				<option value="Dec">Dec</option>
			  
			  
			  </select>
			  
			  
			  
			  
</td></tr>





<tr>
<td>Week Number</td><td><select name="week" class="required" id="select8"style="background:#ccc;">
               
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
				
                <option value="4">4</option>
                <option value="5">5</option>
				</select>
</td></tr>



   <tr>
   <td>
	
<input name="button" type="submit" value="Process" onClick="javascript:return validateMyForm();self.close();"style="padding:10px 45px;"/>
</td></tr>
 </table>
	
		
</div>
	<a href="orditteam.php">	
<div style="float:left; width:350px;height:30px; ">	
<div style="float:left; width:10px; height:30px; background:#989898;">	
							
				
				
	
</div>	
<div style="float:left; width:150px; height:30px; background:#FFBB40;">	

<div style="float:left;text-align:left; margin-left:10px; font-size:16px; width:150px; height:20px;margin-top:5px;">
							
<- Back 				
	</div>
</div>
</div>	

</a>					
				
				
				
	
</div>


</div>
</body>
</html>