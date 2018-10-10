<?php

include 'dbcs.php';
$ms=$_GET['roll'];
page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
if(@$_SESSION['userlevel']!=11){header("location: login.php?error=Unauthorized access");}

 $pic=$_GET["ccode"];
  $level=$_GET["levels"];
   $deptt=$_GET["dept"];
    $scode=$_GET["subject"];
echo $amp=$_POST["amp"];
$roll=$_GET["id"];

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
 <div style="float:left; width:400px;color:#1188aa; height:30px;font-size:28px;color:#fff;text-transform:uppercase;"><?php echo $pic;
 
 ?></div></div>
<form action="bbbss.php?roll=<?php echo $pic;?>&dept=<?php echo $saves;?>" method="POST" >
 <table width="650" style="margin-left:50px;">








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
			<?php	
	
$qry = mysql_query("select subject as total
from  subject where roll='$roll'"); 
$row = mysql_fetch_assoc($qry); 
 echo $saves=$row['total'];

?> 
	
			</div>
			<div style="float:left; width:390px;text-align:center;margin-top:4px; height:25px;color:#fff;text-transform:uppercase;">
			<?php	
$qry = mysql_query("select db1 as total
from  subject where roll='$roll' "); 
$row = mysql_fetch_assoc($qry); 
 echo $saves=$row['total'];

?> 
	
			</div>
			
				
			
			
			
			</div>
				
			
			</div>	
				
	
</div>





			<?php

$query="select * from subject where roll='$roll' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>
<div style="float:left; width:650px;margin-left:0PX;margin-top:0px; height:auto;font-size:14px;">
		
			
			
<div style="float:left; width:620px;border-bottom:1px solid #000;margin-top:0px; height:30px;margin-left:15px;background:#787878;">
			<div style="float:left; width:610px; height:25px;font-size:17px;color:#fff;">
				<div style="float:left; width:100px; height:25px;font-size:17px;color:#fff;">
			
			</div><div style="float:left; width:200px; height:25px;font-size:17px;color:#fff;">
			type:
			</div>	
					<div style="float:left; width:310px; height:25px;font-size:17px;color:#fff;">
			<?php echo $row["subject"];?>
			</div>	
				
			</div>	
			</div>	
			
						
<div style="float:left; width:620px;border-bottom:1px solid #000;margin-top:0px; height:30px;margin-left:15px;background:#787878;">
			<div style="float:left; width:610px; height:25px;font-size:17px;color:#fff;">
				<div style="float:left; width:100px; height:25px;font-size:17px;color:#fff;">
			
			</div><div style="float:left; width:200px; height:25px;font-size:17px;color:#fff;">
			credit:
			</div>	
					<div style="float:left; width:310px; height:25px;font-size:17px;color:#fff;">
			<?php echo $row["credit"];?>
			</div>	
				
			</div>	
			</div>	
						
<div style="float:left; width:620px;border-bottom:1px solid #000;margin-top:0px; height:30px;margin-left:15px;background:#787878;">
			<div style="float:left; width:610px; height:25px;font-size:17px;color:#fff;">
				<div style="float:left; width:100px; height:25px;font-size:17px;color:#fff;">
			
			</div><div style="float:left; width:200px; height:25px;font-size:17px;color:#fff;">
			Department:
			</div>	
					<div style="float:left; width:310px; height:25px;font-size:17px;color:#fff;">
			<?php echo $row["department"];?>
			</div>	
				
			</div>	
			</div>	
						
<div style="float:left; width:620px;border-bottom:1px solid #000;margin-top:0px; height:30px;margin-left:15px;background:#787878;">
			<div style="float:left; width:610px; height:25px;font-size:17px;color:#fff;">
				<div style="float:left; width:100px; height:25px;font-size:17px;color:#fff;">
			
			</div><div style="float:left; width:200px; height:25px;font-size:17px;color:#fff;">
			Theory:
			</div>	
					<div style="float:left; width:310px; height:25px;font-size:17px;color:#fff;">
			<?php echo $row["theory"];?>
			</div>	
				
			</div>	
			</div>	
			
			
			
			
			
						
<div style="float:left; width:620px;border-bottom:1px solid #000;margin-top:0px; height:30px;margin-left:15px;background:#787878;">
			<div style="float:left; width:610px; height:25px;font-size:17px;color:#fff;">
				<div style="float:left; width:100px; height:25px;font-size:17px;color:#fff;">
			
			</div><div style="float:left; width:200px; height:25px;font-size:17px;color:#fff;">
			Practice:
			</div>	
					<div style="float:left; width:310px; height:25px;font-size:17px;color:#fff;">
			<?php echo $row["practice"];?>
			</div>	
				
			</div>	
			</div>	
			
			
						
<div style="float:left; width:620px;border-bottom:1px solid #000;margin-top:0px; height:30px;margin-left:15px;background:#787878;">
			<div style="float:left; width:610px; height:25px;font-size:17px;color:#fff;">
				<div style="float:left; width:100px; height:25px;font-size:17px;color:#fff;">
			
			</div><div style="float:left; width:200px; height:25px;font-size:17px;color:#fff;">
			laboratory:
			</div>	
					<div style="float:left; width:310px; height:25px;font-size:17px;color:#fff;">
			<?php echo $row["laboratory"];?>
			</div>	
				
			</div>	
			</div>	
			
			
						
<div style="float:left; width:620px;border-bottom:1px solid #000;margin-top:0px; height:30px;margin-left:15px;background:#787878;">
			<div style="float:left; width:610px; height:25px;font-size:17px;color:#fff;">
				<div style="float:left; width:100px; height:25px;font-size:17px;color:#fff;">
			
			</div><div style="float:left; width:200px; height:25px;font-size:17px;color:#fff;">
			Objective:
			</div>	
					<div style="float:left; width:310px; height:25px;font-size:17px;color:#fff;">
			<?php echo $row["objective"];?>
			</div>	
				
			</div>	
			</div>	
			
			
			
			
						
<div style="float:left; width:620px;border-bottom:1px solid #000;margin-top:0px; height:30px;margin-left:15px;background:#787878;">
			<div style="float:left; width:610px; height:25px;font-size:17px;color:#fff;">
				<div style="float:left; width:100px; height:25px;font-size:17px;color:#fff;">
			
			</div><div style="float:left; width:200px; height:25px;font-size:17px;color:#fff;">
			Description:
			</div>	
					<div style="float:left; width:310px; height:25px;font-size:17px;color:#fff;">
			<?php echo $row["db1"];?>
			</div>	
				
			</div>	
			</div>	
			
			
			
			
						
<div style="float:left; width:620px;border-bottom:1px solid #000;margin-top:0px; height:30px;margin-left:15px;background:#787878;">
			<div style="float:left; width:610px; height:25px;font-size:17px;color:#fff;">
				<div style="float:left; width:100px; height:25px;font-size:17px;color:#fff;">
			
			</div><div style="float:left; width:200px; height:25px;font-size:17px;color:#fff;">
			offered semester:
			</div>	
					<div style="float:left; width:310px; height:25px;font-size:17px;color:#fff;">
			<?php echo $row["year2"];?>
			</div>	
				
			</div>	
			</div>	

						
<div style="float:left; width:620px;border-bottom:1px solid #000;margin-top:0px; height:30px;margin-left:15px;background:#787878;">
			<div style="float:left; width:610px; height:25px;font-size:17px;color:#fff;">
				<div style="float:left; width:100px; height:25px;font-size:17px;color:#fff;">
			
			</div><div style="float:left; width:200px; height:25px;font-size:17px;color:#fff;">
			Technical:
			</div>	
					<div style="float:left; width:310px; height:25px;font-size:17px;color:#fff;">
			<?php echo $row["technical"];?>
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