<?php

include 'dbcs.php';
$ms=$_GET['roll'];
page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
if(@$_SESSION['userlevel']!=19){header("location: login.php?error=Unauthorized access");}

 $pic=$_GET["pic"];
echo $amp=$_POST["amp"];
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
<link href="popups.css" rel="stylesheet" type="text/css" />

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
<div style="float:left; width:650px;border-bottom:1px solid #000;margin-top:3px; height:40px;background:rgb(120,80,100);">

<div style="float:left; width:100px; height:80px;color:#fff;font-size:22px;"><div style="float:left;margin-top:5px;margin-left:5px;">&#9658;</div></div>
 <div style="float:left; width:300px;color:#1188aa; height:30px;font-size:28px;color:#fff;text-transform:uppercase;"><?php echo $roll;
 
 
$qry = mysql_query("select comment as total
from  department where comment='$amp' "); 
$row = mysql_fetch_assoc($qry); 
 $saves=$row['total'];?></div></div>
<form action="bbbss.php?roll=<?php echo $pic;?>&dept=<?php echo $saves;?>" method="POST" >
 <table width="650" style="margin-left:50px;">
<tr><td>Semester</td><td>
 
<select name='amp' id='inputFieldId' autofocus="autofocus" required='required'style="padding:3px;"   onchange='this.form.submit()'>
<?php

$qry = mysql_query("select comment as total
from  department where comment='$amp' "); 
$row = mysql_fetch_assoc($qry); 
 $saves=$row['total']; 
$rs=mysql_query("Select * from  department where comment='$amp' ");
	  while($row=mysql_fetch_array($rs))
{
if($row[1]==$fees)
{
echo "<option value='$row[0]' selected>$row[2] </option>";
}
else
{
echo "<option value='$row[0]'>$row[2] </option>";
}
}
?></select></td></tr>




<tr><td>Specify Level</td><td>
 
<select name='levels' id='inputFieldId' autofocus="autofocus" required='required'style="padding:3px;"   onchange='this.form.submit()'>
<?php
 
$rs=mysql_query("Select * from  levels ");
	  while($row=mysql_fetch_array($rs))
{
if($row[1]==$fees)
{
echo "<option value='$row[1]' selected>$row[2] </option>";
}
else
{
echo "<option value='$row[1]'>$row[2] </option>";
}
}
?></select></td></tr>








</table>
 <script>
    if (!("autofocus" in document.createElement("input")))
            document.getElementById("inputFieldId").focus();
</script>
</FORM>
			

			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
<div style="float:left; width:650px;margin-left:0PX;margin-top:10px; height:auto;font-size:14px;">
		
			
			
<div style="float:left; width:620px;border-bottom:1px solid #000;margin-top:15px; height:30px;margin-left:15px;background:rgb(120,80,100);">
			<div style="float:left; width:6100px; height:25px;font-size:17px;color:#fff;text-transform:uppercase;">
		
			
			<div style="float:left; width:140px;text-align:center;margin-top:4px; height:25px;color:#fff;;">
		1. Semester
			</div>
			<div style="float:left; width:150px;text-align:center;margin-top:4px; height:25px;color:#fff;text-transform:uppercase;">
		
			</div>
			
				<div style="float:left; width:120px;text-align:left;margin-top:4px; height:25px;color:#fff;">
		
			</div>
			
			<div style="float:left; width:120px;text-align:left;margin-top:4px; height:25px;color:#fff;">
		
			</div>
			
			
			
			</div>
				
			
			</div>	
				
	
</div>





			<?php

$query="select * from subject where department='$amp' and db1>'' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>
<a href="ccoum.php?id=<?php echo $row["roll"];?>&dept=<?php echo $row["department"];?>&levels=<?php echo $row["year1"];?>&ccode=<?php echo $row["db1"];?>&subject=<?php echo $row["subject"];?>">
<div style="float:left; width:650px;margin-left:0PX;margin-top:0px; height:auto;font-size:14px;">
		
			
			
<div style="float:left; width:620px;border-bottom:1px solid #000;margin-top:0px; height:30px;margin-left:15px;background:#787878;">
			<div style="float:left; width:6100px; height:25px;font-size:17px;color:#fff;">
			<div style="float:left; width:70px;text-align:center;margin-top:4px; height:25px;color:#fff;;">
			delete
			</div>
			
			<div style="float:left; width:80px;text-align:center;margin-top:4px; height:25px;color:#fff;;">
			<?php echo $row["subject"];?>
			</div>
			<div style="float:left; width:300px;text-align:left;margin-top:4px; height:25px;color:#fff;text-transform:uppercase;">
		<?php echo $row["db1"];?>
			</div>
			
				<div style="float:left; width:60px;text-align:left;margin-top:4px; height:25px;color:#fff;">
		<?php echo $row["status"];?>
			</div>
			
			<div style="float:left; width:120px;text-align:left;margin-top:4px; height:25px;color:#fff;">
		<?php echo $row["credit"];?>
			</div>
			
			
			
			</div>
				
			
			</div>	
				
	
</div>
<?php } ?>


<div style="float:left; width:650px; height:27px;font-size:14px;margin-top:1px;">		
	





<div style="float:left; width:50px;text-align:left; height:24px;">
			<div style="float:left; width:50px;margin-top:3px;">

	
			</div></div>
			<div style="float:left; width:170px;text-align:left; height:24px;text-transform:uppercase;">
				<div style="float:left; width:170px;margin-top:3px;">
	<a href="addee.php">
&#9658; Add New Course &nbsp;&nbsp;</a>
			</div>
			</div>
			
				<div style="float:left; width:250px;text-align:left; height:24px;text-transform:uppercase;">
				<div style="float:left; width:450px;margin-top:3px;margin-left:5px;">
			
			</div>
			</div>
						
		</div>		
						
				
				
				
				
				
				
				
	





<div style="float:left; width:650px; height:27px;font-size:14px;margin-top:1px;">		
	





<div style="float:left; width:50px;text-align:left; height:24px;">
			<div style="float:left; width:50px;margin-top:3px;">

	
			</div></div>
			<div style="float:left; width:170px;text-align:left; height:24px;text-transform:uppercase;">
				<div style="float:left; width:170px;margin-top:3px;">
	<a href="dean.php">
&#9658; HOME PAGE &nbsp;&nbsp;</a>
			</div>
			</div>
			
				<div style="float:left; width:250px;text-align:left; height:24px;text-transform:uppercase;">
				<div style="float:left; width:450px;margin-top:3px;margin-left:5px;">
			
			</div>
			</div>
						
		</div>		
						
				
				
				
				
				
				
				
	
</div>

















</div>
</body>
</html>