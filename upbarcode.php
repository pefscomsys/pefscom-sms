<?php

include 'dbcs.php';
page_protect();

ini_set('max_execution_time', 300250000); //300 seconds = 5 minutes

 $notes=$_SESSION['user_name'];



 
 ?><?php
 $notes=$_SESSION['user_name'];
$roll=$_GET["1"];
$query="select * from users where user_name='$notes'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $ids=$row['fax'];


?>
<?php } ?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link rel="stylesheet" type="text/css" href="casesxs.css" />
<style>


</style>
</head>
<body>
<br><br><div  style="text-align:center; margin:auto; width:900px; height:150px;">
 <?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php $take=$row[1];
?>
<?php }?>
 
 
 <?php
$rolls=$_GET["roll"];
$query="select * from school where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<b>
<?php echo $row[1];?><br>

<?php echo $row[2];?>
</b>

<br>
Daily Receipt for <?php echo $rolls;
?> of Academic  Year: <?php echo $take;
?>
<?php } ?>
</b>
 <br> <br> <br> <br>
<table cellspacing="0" cellpadding="5" width="700px">

<tr><td style="width:100px;background:#ccc;border-bottom:1px solid #ccc;">id</td>
<td style="width:150px;background:#ccc;border-bottom:1px solid #ccc;">Level</td>


 <?php

$query="select * from courses where levels='400' and db1='2016/2017' ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
	 $mat=$row['matricule'];	 
 $qry = mysql_query("select  barcode as total
from barcode where matricule='$mat' and  db1='2016/2017'"); 
$row = mysql_fetch_assoc($qry); 
  $mxc11UI=$row['total'];
  $mango="rt";
    echo  $tt="$mxc11UI$mango";

  
$query5="update barcode set barcode='$tt' where matricule='$mat' and  db1='2016/2017'";

mysql_query ($query5s) or die ('could not updated:'.mysql_error());
  
?>
		 <?php } ?>

 <?php

$query="select * from levels  "; 
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
			 
			 
			 ?>
			 
			 
			 
			
<tr><td style="width:100px;background:#ccc;border-bottom:1px solid #ccc;"><?php echo $row['roll'];?></td>
<td style="width:150px;background:#ccc;border-bottom:1px solid #ccc;"><a href='searchalls.php?roll=<?php echo $rolls;?>&&x=<?php echo $row['levels'];?>'><?php echo $row['levels'];?></td>
</tr> 
			 
			 
			  <?php } ?>
			 
			 
			 
			 