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
<?php } ?>


<?php
$roll=$_GET["1"];
$query="select * from matsub where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off1=$row['mgg'];


?><?php } ?>

<?php
$roll=$_GET["2"];
$query="select * from matsub where roll='2'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off2=$row['mgg'];


?><?php } ?>


<?php
$roll=$_GET["3"];
$query="select * from matsub where roll='3'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off3=$row['mgg'];


?><?php } ?>





<?php
$roll=$_GET["4"];
$query="select * from matsub where roll='4'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off4=$row['mgg'];


?><?php } ?>



<?php
$roll=$_GET["5"];
$query="select * from matsub where roll='5'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off5=$row['mgg'];


?><?php } ?>





<?php
$roll=$_GET["6"];
$query="select * from matsub where roll='6'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off6=$row['mgg'];


?><?php } ?>



<?php
$roll=$_GET["7"];
$query="select * from matsub where roll='7'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php  $off7=$row['mgg'];


?><?php } ?>


<?php
$roll=$_GET["8"];
$query="select * from matsub where roll='8'";
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
	body{ 
background:url(Tulips.jpg);
		font-family:Tahoma, Geneva, sans-serif;
		font-size:18px;
	}
	</style>
	
	</head>
	<body>
	<div style="float:left; width:700px; height:400px;">
	

<?php
$roll=$_GET["6"];
$query="select * from matsub where extra='$ids'order by roll ASC";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>

	<div style="float:left; width:208px; height:400px;">
	
	<div style="float:left; width:230px; margin-top:10px;">
	<div style="float:left; width:208px;text-align:center; height:57px; background:#efefef; font-family:impact;">
		 <a href="levelssxc.php?roll=<?php echo $off6=$row['mgg'];?>&term=<?php echo $_GET["term"];?>">
	<div style="float:left; width:208px; margin-top:10px;">
<?php  echo $off6=$row['mgg'];


?>
	
	</div></a>
	
	</div>
	</div>
	<?php } ?>
	
	
	
	
	
	
	
	
	
	
	
	</div>
	
	</div>
	
	
	
	
	</body>
	</html>