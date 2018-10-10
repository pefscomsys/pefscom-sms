<?php

include 'dbcs.php';

page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
if(@$_SESSION['userlevel']!=11){header("location: login.php?error=Unauthorized access");}




 $ip=@$_SERVER['REMOTE_ADDR'];
 

$result = mysql_query("SELECT * FROM courses where fname>'' order by fname ASC");
?>
<?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $ids=$row['fax'];


?>
<?php } ?>
<html>
<head>
<title>Users List</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<script language="javascript" src="usersss.js" type="text/javascript"></script>
</head>
<body>
	<div style="float:left; width:1000px; height:auto;font-size:14px;">
	

	
	<div style="float:left; width:200px; height:400px;">
	
		
	<?php
$roll=$_GET["1"];
$query="select * from matsub  where extra='$ids' order by levels DESC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
	
	
	<div style="float:left; width:208px;text-align:center; height:37px;color:#009966; background:#efefef; font-family:impact;">
	<a href="sub201x.php?roll=<?php  echo $off1=$row['mgg'];


?>">
	<div style="float:left; width:208px; margin-top:10px;height:47px; ">
	 

<?php  echo $off1=$row['mgg'];


?>

	</div></a><?php } ?>

	
	</div>
	<div style="float:left; width:92px; margin-top:10px;"></div>
	
	
	
	
	<div style="float:left; width:300px; height:400px;">
	
		
	<?php
$roll=$_GET["1"];
$query="select * from matsub where extra='$ids' order by levels DESC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
	
	
	<div style="float:left; width:208px;text-align:center; height:37px;color:#009966;background:rgb(120,80,100); font-family:impact;">
	<a href="sub202x.php?roll=<?php  echo $off1=$row['mgg'];


?>" style="color:white;">
	<div style="float:left; width:208px; margin-top:10px;height:47px; ">
	 Edit-

<?php  echo $off1=$row['mgg'];


?>

	</div></a><?php } ?>

	
	</div>
	<div style="float:left; width:92px; margin-top:10px;"></div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<div style="float:left; width:92px; margin-top:10px;"></div>
	
	<div style="float:left; width:208px;text-align:center; height:37px;color:#009966; background:#fff; font-family:impact;">
	<a href="picc.php">
	<div style="float:left; width:208px; margin-top:10px;">
	Change Picture
	</div></a>
	
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	