<?php

include 'dbcs.php';
$ms=$_GET['roll'];
page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;

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


?>
<?php } ?>
<form name="look" method="post" action="st3bm.php">
<table style=" border:1px solid silver" cellpadding="5px" cellspacing="0px" align="center" border="0" style="font-size:13px;margin-left:-100px;"width="800px">
<tr>
<td colspan="8" style=" color:#fff; font-size:20px; background:#FFBB40;">Search</td>
</tr>
<tr>
<td>Enter Search Keyword</td>
<td><input type="text" name="search" size="10"placeholder="use admission #" /></td>
<td><input type="submit" value="Search" /></td>
</tr>
<tr bgcolor="#666666" style="color:#fff;">
<td >Name's of student </td>
<td>Department</td>
<td >Action</td>
<?php
$roll=$_GET["1"];
$query="select * from rushs where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $take=$row[1];


?>
	<?php } ?>
<?php
$search=$_POST["search"];
$flag=0;
$query="select * from courses where  fname like '%$search%' and fname>'' LIMIT 20 ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 $flag=1;
		 
		 ?>
		<tr ><td><?php echo $row['fname'];$mats= $row['matricule']; $db1=$row["db1"];$department=$row[3];$mnn=$row[0];?> <?php echo $db1;?></td><td><?php echo $row[3];?> <?php echo $levels=$row['levels'];?> </td><td><a href="buildst3PO.php?roll=<?php echo $mnn;?>&db1=<?php echo $db1;?>&mats=<?php echo $mats;?>&ui=<?php echo $levels;?>">Build Result Slip</a></td>
		<td><a href="replicator/sync-mysql2.php?mats=<?php echo $mats;?>&rx=<?php echo $db1;?>&ui=<?php echo $levels;?>&dept=<?php echo $department;?>">Transfer Online</a></td>
		<td>
		<a href="deleteh.php?roll=<?php echo $mnn;?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td></tr>

		 <?php 
		 }
		 		 
?>
<tr>
<td colspan="3"></td></tr>
<tr bgcolor="#CCCCCC">
</tr>
</table>