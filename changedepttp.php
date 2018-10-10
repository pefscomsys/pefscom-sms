<?php

include 'dbcs.php';

page_protect();


 $notes=$_SESSION['user_name'];

$user_name=$notes;




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
<script language="javascript" src="userssspo.js" type="text/javascript"></script>
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<table border="0" cellpadding="10" cellspacing="1" width="950" class="tblListForm">
<tr class="listheader">
<td></td><td>SN</td>
<td>Matricule</td>
<td>Full Names</td>
<td>Department</td><td>Motive</td>

</tr>
<tr class="listheader">
<td></td>
<td>Enter Search Keyword</td><td><input type="text" name="search" size="39"placeholder="name #" /></td>
<td><input type="submit" value="Search" /></td>
<td>Motive</td>




</tr>



<?php
$roll=$_GET["3"];
$query="select * from rushss where roll='1'";
$result=mysql_query($query);
		 while ($row = mysql_fetch_array($result)) {
?>

<?php   $take=$row[1];
 
?>



<?php } ?>


<?php
$search=$_POST["search"];
$flag=0;
$query="select * from courses where  fname like '%$search%'  and fname>'' and c110='$ids' AND db1='$take' order by matricule ASC ";
$l=1;
$result=mysql_query($query);
$i=0;
 while ($row = mysql_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $l++; ?> </td>
<td><input type="checkbox" name="users[]" value="<?php echo $row["roll"]; ?>" ></td>
<td><?php echo $row["matricule"]; ?></td>
<td><?php echo $row["fname"]; ?></td>
<td><?php echo $row["departmet"]; ?></td>
<td></td>
</tr>
<?php
$i++;
}
?>
<tr class="listheader">
<td colspan="7"><input type="button" name="update" value="Change Matricule" onClick="setUpdateAction();" /> <input type="button" name="delete" value=""  onClick="setDeleteAction();" /></td>
</tr>
</table>
</form>
</div>
</body></html>