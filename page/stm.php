<?php

include 'dbcs.php';
$ms=$_GET['roll'];
page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;
if(@$_SESSION['userlevel']!=11){header("location: login.php?error=Unauthorized access");}

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
<form name="look" method="post" action="stm.php">
<table style=" border:1px solid silver" cellpadding="5px" cellspacing="0px" align="center" border="0" style="font-size:13px;"width="750px">
<tr>
<td colspan="4" style=" color:#fff; font-size:20px; background:#50a3a2">Search</td>
</tr>
<tr>
<td>Enter Search Keyword/ Entre Mot-cle</td>
<td><input type="text" name="search" size="10"placeholder="use admission #" /></td>
<td><input type="submit" value="Search" /></td>
</tr>
<tr bgcolor="#666666" style="color:#fff;">
<td >Name's of student </td>
<td>Department</td>
<td >Action</td>
<?php
$roll=$_GET["1"];
$query="select * from rush where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 
		 
 
?>
<?php $take=$row[1];


?><br>
	<?php } ?>
<?php
$search=$_POST["search"];
$flag=0;
$query="select * from courses where  fname like '%$search%'  and fname>'' LIMIT 20  ";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
		 $flag=1;
		 echo "<tr ><td>",$row['fname'],"</td><td>&nbsp;",$row[3]," &nbsp;",$row['db1'],"</td><td>
		 <a href='buildst3.php?roll=",$row['matricule'],"&levels=",$row['levels'],"&db1=",$row['db1'],"'>Click To Add</a></td></tr>";

		 }
		 if($flag==0)
		 echo "<tr><td colspan='3' align='center' style='color:red'>Record not found</td></tr>";
		 		 
?>
<tr>
<td colspan="3"></td></tr>
<tr bgcolor="#CCCCCC">
</tr>
</table>
</form>
