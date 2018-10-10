<?php

include 'dbcs.php';
page_protect();


$notes=$_SESSION['user_name'];

$user_name=$notes;




 ?><?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from users where full_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $ids=$row['fax'];
 $levels=$row['user_level'];

?>
<?php } ?><?php  $rem=$_GET["roll"];
?>



<?php
$roll=$_GET["1"];
$query="select * from matsub where roll='1' and extra='$ids'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off1=$row['mgg'];


?><?php } ?>

<?php
$roll=$_GET["2"];
$query="select * from matsub where roll='2' and extra='$ids'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off2=$row['mgg'];


?><?php } ?>


<?php
$roll=$_GET["3"];
$query="select * from matsub where roll='3' and extra='$ids'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off3=$row['mgg'];


?><?php } ?>





<?php
$roll=$_GET["4"];
$query="select * from matsub where roll='4' and extra='$ids'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off4=$row['mgg'];


?><?php } ?>



<?php
$roll=$_GET["5"];
$query="select * from matsub where roll='5' and extra='$ids'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off5=$row['mgg'];


?><?php } ?>





<?php
$roll=$_GET["6"];
$query="select * from matsub where roll='6' and extra='$ids'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off6=$row['mgg'];


?><?php } ?>



<?php
$roll=$_GET["7"];
$query="select * from matsub where roll='7' and extra='$ids'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off7=$row['mgg'];


?><?php } ?>


<?php
$roll=$_GET["8"];
$query="select * from matsub where roll='8' and extra='$ids'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off8=$row['mgg'];


?><?php } ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<title><?php echo $school;?></title>
        <link rel="shortcut icon" href="pef.png"> 
	<style>
	</style>
	
	</head>
	<body>
	<div style="float:left; width:700px; height:400px;">
	
	
	<div style="float:left; width:100px; height:400px;">
	
	</div>
	
	
	<div style="float:left; width:300px; height:400px;">
	
	<div style="float:left; width:208px;text-align:center; height:57px; background:url(age.png); font-family:impact;">
	<a href="getst1p.php?roll=<?php echo $rem;?>&term=<?php echo $_GET["term"];?>">
	<div style="float:left; width:208px; margin-top:10px;">
100 LEVEL
	
	</div></a>
	
	</div>
	<div style="float:left; width:92px; margin-top:10px;"></div>
	
	
		<div style="float:left; width:208px;text-align:center; height:57px; background:url(age.png); font-family:impact;">
	<a href="getst1.php?roll=<?php echo $rem;?>&term=<?php echo $_GET["term"];?>">
	<div style="float:left; width:208px; margin-top:10px;">
200 LEVEL
	
	</div></a>
	
	</div>
	
	
	<div style="float:left; width:92px; margin-top:10px;"></div>
	
	
		<div style="float:left; width:208px;text-align:center; height:57px; background:url(age.png); font-family:impact;">
	<a href="getst12.php?roll=<?php echo $rem;?>&term=<?php echo $_GET["term"];?>">
	<div style="float:left; width:208px; margin-top:10px;">
300 LEVEL
	
	</div></a>
	
	</div>
	
	
	<div style="float:left; width:92px; margin-top:10px;"></div>
	
	
		
	
		<div style="float:left; width:208px;text-align:center; height:57px; background:url(age.png); font-family:impact;">
	<a href="getst13.php?roll=<?php echo $rem;?>&term=<?php echo $_GET["term"];?>">
	<div style="float:left; width:208px; margin-top:10px;">
400 LEVEL
	
	</div></a>
	
	</div>
	
	
	<div style="float:left; width:92px; margin-top:10px;"></div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	</div>
	
	</div>
	
	
	
	
	</body>
	</html>